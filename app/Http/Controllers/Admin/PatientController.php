<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::latest()->get();
        return view('admin.patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.patient.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $patient = Patient::with(['clinicalAssessment', 'serialLabs', 'cultures.sensitivities'])->findOrFail($id);
        return view('admin.patient.view', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        try {
            DB::beginTransaction();

            // 1. Create Patient Demographics
            $patient = Patient::create($request->only([
                'hospital_code', 'uhid', 'date_of_admission', 'time_of_presentation',
                'age', 'sex', 'chief_complaints', 'diagnosis', 'symptom_duration',
                'comorbidities_cc_index', 'comorbidity_less_5_years',
                'previously_ill_last_3_months', 'prev_antibiotic_last_3_months',
                'initial_probable_sepsis_diagnosis', 'direct_or_referred'
            ]));

            // 2. Create Clinical Assessment
            $patient->clinicalAssessment()->create($request->only([
                'sofa_score_admission', 'qsofa_score', 'mews_score', 'news_score',
                'mdro_screening', 'organ_dysfunction', 'first_lactate_ordered_date',
                'first_lactate_ordered_time', 'first_lactate_value', 'blood_cultures_sent_date',
                'other_samples_sent_cultures', 'other_culture_sent_date', 'other_culture_sent_time',
                'first_dose_antibiotic_date', 'name_emperical_antibiotic', 'initial_fluid_administered',
                'volume_fluid_administered', 'patient_response_post_infusion', 'repeat_lactate_after_infusion',
                'no_of_organs_affected', 'any_surgery_28_days', 'molecular_tests_ordered_date',
                'which_molecular_test', 'molecular_tests_result_received_date', 'blood_culture_result',
                'blood_culture_positive_date', 'blood_culture_positive_time', 'antibiotic_changed',
                'rapid_pcr_results', 'antibiotics_change_after_pcr', 'other_culture_reported_on',
                'sample_culture_growth', 'resistant_organism', 'mdro_screening_result', 'usg_abdomen_date',
                'usg_abdomen_findings', 'chest_xray_date', 'chest_xray_findings', 'pet_ct_date',
                'pet_ct_findings', 'followup_ct_date', 'followup_ct_findings', 'repeat_chest_xray_dates',
                'xray_findings', 'pleural_tapping_date', 'pleural_fluid_culture', 'day_antibiotic_change',
                'empirical_antibiotic_days', 'definitive_antibiotic_days', 'source_established',
                'outcome_day7', 'outcome_day14', 'outcome_day21', 'outcome_day28', 'icu_days',
                'ward_days', 'discharge_date'
            ]));

            // 3. Create Serial Labs
            if ($request->has('serial_labs') && is_array($request->serial_labs)) {
                foreach ($request->serial_labs as $lab) {
                    $patient->serialLabs()->create($lab);
                }
            }

            // 4. Create Cultures and their Sensitivities
            if ($request->has('cultures') && is_array($request->cultures)) {
                foreach ($request->cultures as $cultureData) {
                    $culture = $patient->cultures()->create([
                        'day' => $cultureData['day'] ?? $cultureData['pusday'] ?? $cultureData['urineday'] ?? $cultureData['bloodday'] ?? null,
                        'specimen_type' => $cultureData['specimen_type'] ?? null,
                        'testing_date' => $cultureData['testing_date'] ?? null,
                        'organism_name' => $cultureData['organism_name'] ?? null,
                    ]);

                    // Create Sensitivities for this Culture
                    if (isset($cultureData['sensitivities']) && is_array($cultureData['sensitivities'])) {
                        foreach ($cultureData['sensitivities'] as $sensitivity) {
                            if (!empty($sensitivity['result'])) {
                                $culture->sensitivities()->create([
                                    'antibiotic_name' => $sensitivity['antibiotic_name'],
                                    'result' => $sensitivity['result'],
                                ]);
                            }
                        }
                    }
                }
            }

            DB::commit();

            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'patient_id' => $patient->id,
                    'redirect_url' => route('admin.patients.edit', $patient->id),
                    'message' => 'Patient Data saved successfully! You can now continue filling out the remaining tabs.'
                ]);
            }

            return redirect()->route('admin.patients.edit', $patient->id)->with('success', 'Patient Data saved successfully! You can now continue filling out the remaining tabs.')->with('current_step', $request->input('current_step', 1));

        } catch (\Exception $e) {
            DB::rollBack();
            // In a production app, you might want to log the exception
            
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to save patient data: ' . $e->getMessage()
                ], 500);
            }
            
            return redirect()->back()->with('error', 'Failed to save patient data: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient = Patient::with(['clinicalAssessment', 'serialLabs', 'cultures.sensitivities'])->findOrFail($id);
        
        // Relations are passed as-is to JS
        
        return view('admin.patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\UpdatePatientRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            
            $patient = Patient::findOrFail($id);

            // 1. Update Patient Demographics
            $patient->update($request->only([
                'hospital_code', 'uhid', 'date_of_admission', 'time_of_presentation',
                'age', 'sex', 'chief_complaints', 'diagnosis', 'symptom_duration',
                'comorbidities_cc_index', 'comorbidity_less_5_years',
                'previously_ill_last_3_months', 'prev_antibiotic_last_3_months',
                'initial_probable_sepsis_diagnosis', 'direct_or_referred'
            ]));

            // 2. Update or Create Clinical Assessment
            if ($patient->clinicalAssessment) {
                $patient->clinicalAssessment->update($request->only([
                    'sofa_score_admission', 'qsofa_score', 'mews_score', 'news_score',
                    'mdro_screening', 'organ_dysfunction', 'first_lactate_ordered_date',
                    'first_lactate_ordered_time', 'first_lactate_value', 'blood_cultures_sent_date',
                    'other_samples_sent_cultures', 'other_culture_sent_date', 'other_culture_sent_time',
                    'first_dose_antibiotic_date', 'name_emperical_antibiotic', 'initial_fluid_administered',
                    'volume_fluid_administered', 'patient_response_post_infusion', 'repeat_lactate_after_infusion',
                    'no_of_organs_affected', 'any_surgery_28_days', 'molecular_tests_ordered_date',
                    'which_molecular_test', 'molecular_tests_result_received_date', 'blood_culture_result',
                    'blood_culture_positive_date', 'blood_culture_positive_time', 'antibiotic_changed',
                    'rapid_pcr_results', 'antibiotics_change_after_pcr', 'other_culture_reported_on',
                    'sample_culture_growth', 'resistant_organism', 'mdro_screening_result', 'usg_abdomen_date',
                    'usg_abdomen_findings', 'chest_xray_date', 'chest_xray_findings', 'pet_ct_date',
                    'pet_ct_findings', 'followup_ct_date', 'followup_ct_findings', 'repeat_chest_xray_dates',
                    'xray_findings', 'pleural_tapping_date', 'pleural_fluid_culture', 'day_antibiotic_change',
                    'empirical_antibiotic_days', 'definitive_antibiotic_days', 'source_established',
                    'outcome_day7', 'outcome_day14', 'outcome_day21', 'outcome_day28', 'icu_days',
                    'ward_days', 'discharge_date'
                ]));
            } else {
                $patient->clinicalAssessment()->create($request->only([
                    'sofa_score_admission', 'qsofa_score', 'mews_score', 'news_score',
                    'mdro_screening', 'organ_dysfunction', 'first_lactate_ordered_date',
                    'first_lactate_ordered_time', 'first_lactate_value', 'blood_cultures_sent_date',
                    'other_samples_sent_cultures', 'other_culture_sent_date', 'other_culture_sent_time',
                    'first_dose_antibiotic_date', 'name_emperical_antibiotic', 'initial_fluid_administered',
                    'volume_fluid_administered', 'patient_response_post_infusion', 'repeat_lactate_after_infusion',
                    'no_of_organs_affected', 'any_surgery_28_days', 'molecular_tests_ordered_date',
                    'which_molecular_test', 'molecular_tests_result_received_date', 'blood_culture_result',
                    'blood_culture_positive_date', 'blood_culture_positive_time', 'antibiotic_changed',
                    'rapid_pcr_results', 'antibiotics_change_after_pcr', 'other_culture_reported_on',
                    'sample_culture_growth', 'resistant_organism', 'mdro_screening_result', 'usg_abdomen_date',
                    'usg_abdomen_findings', 'chest_xray_date', 'chest_xray_findings', 'pet_ct_date',
                    'pet_ct_findings', 'followup_ct_date', 'followup_ct_findings', 'repeat_chest_xray_dates',
                    'xray_findings', 'pleural_tapping_date', 'pleural_fluid_culture', 'day_antibiotic_change',
                    'empirical_antibiotic_days', 'definitive_antibiotic_days', 'source_established',
                    'outcome_day7', 'outcome_day14', 'outcome_day21', 'outcome_day28', 'icu_days',
                    'ward_days', 'discharge_date'
                ]));
            }

            // 3. Update Serial Labs (Full replacement for simplicity)
            $patient->serialLabs()->delete(); // ALWAYS delete to allow clearing the table
            if ($request->has('serial_labs') && is_array($request->serial_labs)) {
                foreach ($request->serial_labs as $lab) {
                    $patient->serialLabs()->create($lab);
                }
            }

            // 4. Update Cultures (Full replacement for simplicity)
            $patient->cultures()->delete(); // ALWAYS delete to allow clearing the table
            if ($request->has('cultures') && is_array($request->cultures)) {
                foreach ($request->cultures as $cultureData) {
                    $culture = $patient->cultures()->create([
                        'day' => $cultureData['day'] ?? $cultureData['pusday'] ?? $cultureData['urineday'] ?? $cultureData['bloodday'] ?? null,
                        'specimen_type' => $cultureData['specimen_type'] ?? null,
                        'testing_date' => $cultureData['testing_date'] ?? null,
                        'organism_name' => $cultureData['organism_name'] ?? null,
                    ]);

                    if (isset($cultureData['sensitivities']) && is_array($cultureData['sensitivities'])) {
                        foreach ($cultureData['sensitivities'] as $sensitivity) {
                            if (!empty($sensitivity['result'])) {
                                $culture->sensitivities()->create([
                                    'antibiotic_name' => $sensitivity['antibiotic_name'],
                                    'result' => $sensitivity['result'],
                                ]);
                            }
                        }
                    }
                }
            }

            DB::commit();
            
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Patient Data updated successfully!'
                ]);
            }

            // Redirect back to edit to keep working
            return redirect()->route('admin.patients.edit', $patient->id)->with('success', 'Patient Data updated successfully!')->with('current_step', $request->input('current_step', 1));

        } catch (\Exception $e) {
            DB::rollBack();
            
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update patient data: ' . $e->getMessage()
                ], 500);
            }
            
            return redirect()->back()->with('error', 'Failed to update patient data: ' . $e->getMessage())->withInput();
        }
    }
}
