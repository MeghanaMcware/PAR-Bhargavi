<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Allowing all for now
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $patientParam = $this->route('patient');
        $patientId = $patientParam instanceof \App\Models\Patient ? $patientParam->id : $patientParam;
        return [
            // --- PATIENT DEMOGRAPHICS ---
            'hospital_code' => 'nullable|string|max:255',
            'uhid' => 'required|string|max:255|unique:patients,uhid,' . $patientId,
            'date_of_admission' => 'nullable|date',
            'time_of_presentation' => 'nullable|date_format:H:i',
            'age' => 'nullable|integer',
            'sex' => 'nullable|string',
            'chief_complaints' => 'nullable|string',
            'diagnosis' => 'nullable|string',
            'symptom_duration' => 'nullable|string',
            'comorbidities_cc_index' => 'nullable|string',
            'comorbidity_less_5_years' => 'nullable|string',
            'previously_ill_last_3_months' => 'nullable|string',
            'prev_antibiotic_last_3_months' => 'nullable|string',
            'initial_probable_sepsis_diagnosis' => 'nullable|string',
            'direct_or_referred' => 'nullable|string',

            // --- CLINICAL ASSESSMENTS ---
            'sofa_score_admission' => 'nullable|string',
            'qsofa_score' => 'nullable|string',
            'mews_score' => 'nullable|string',
            'news_score' => 'nullable|string',
            'mdro_screening' => 'nullable|string',
            'organ_dysfunction' => 'nullable|string',
            'first_lactate_ordered_date' => 'nullable|date',
            'first_lactate_ordered_time' => 'nullable|date_format:H:i',
            'first_lactate_value' => 'nullable|string',
            'blood_cultures_sent_date' => 'nullable|date',
            'other_samples_sent_cultures' => 'nullable|string',
            'other_culture_sent_date' => 'nullable|date',
            'other_culture_sent_time' => 'nullable|date_format:H:i',
            'first_dose_antibiotic_date' => 'nullable|date',
            'name_emperical_antibiotic' => 'nullable|string',
            'initial_fluid_administered' => 'nullable|string',
            'volume_fluid_administered' => 'nullable|string',
            'patient_response_post_infusion' => 'nullable|string',
            'repeat_lactate_after_infusion' => 'nullable|string',
            'no_of_organs_affected' => 'nullable|integer',
            'any_surgery_28_days' => 'nullable|integer',
            'molecular_tests_ordered_date' => 'nullable|date',
            'which_molecular_test' => 'nullable|string',
            'molecular_tests_result_received_date' => 'nullable|string',
            'blood_culture_result' => 'nullable|string',
            'blood_culture_positive_date' => 'nullable|date',
            'blood_culture_positive_time' => 'nullable|date_format:H:i',
            'antibiotic_changed' => 'nullable|string',
            'rapid_pcr_results' => 'nullable|string',
            'antibiotics_change_after_pcr' => 'nullable|string',
            'other_culture_reported_on' => 'nullable|date',
            'sample_culture_growth' => 'nullable|string',
            'resistant_organism' => 'nullable|string',
            'mdro_screening_result' => 'nullable|string',
            'usg_abdomen_date' => 'nullable|date',
            'usg_abdomen_findings' => 'nullable|string',
            'chest_xray_date' => 'nullable|date',
            'chest_xray_findings' => 'nullable|string',
            'pet_ct_date' => 'nullable|date',
            'pet_ct_findings' => 'nullable|string',
            'followup_ct_date' => 'nullable|date',
            'followup_ct_findings' => 'nullable|string',
            'repeat_chest_xray_dates' => 'nullable|string',
            'xray_findings' => 'nullable|string',
            'pleural_tapping_date' => 'nullable|date',
            'pleural_fluid_culture' => 'nullable|string',
            'day_antibiotic_change' => 'nullable|integer',
            'empirical_antibiotic_days' => 'nullable|integer',
            'definitive_antibiotic_days' => 'nullable|integer',
            'source_established' => 'nullable|string',
            'outcome_day7' => 'nullable|string',
            'outcome_day14' => 'nullable|string',
            'outcome_day21' => 'nullable|string',
            'outcome_day28' => 'nullable|string',
            'icu_days' => 'nullable|integer',
            'ward_days' => 'nullable|integer',
            'discharge_date' => 'nullable|date',

            // --- SERIAL LABS ---
            'serial_labs' => 'nullable|array',
            'serial_labs.*.day' => 'nullable|string',
            'serial_labs.*.lab_parameters' => 'nullable|string',
            'serial_labs.*.wbc_tc' => 'nullable|string',
            'serial_labs.*.bands_left_shift' => 'nullable|string',
            'serial_labs.*.nlr' => 'nullable|string',
            'serial_labs.*.platelets' => 'nullable|string',
            'serial_labs.*.hb' => 'nullable|string',
            'serial_labs.*.pct' => 'nullable|string',
            'serial_labs.*.crp' => 'nullable|string',
            'serial_labs.*.s_lactate' => 'nullable|string',
            'serial_labs.*.urea_bun' => 'nullable|string',
            'serial_labs.*.s_creatinine' => 'nullable|string',
            'serial_labs.*.ast' => 'nullable|string',
            'serial_labs.*.alt' => 'nullable|string',
            'serial_labs.*.s_bilurubin' => 'nullable|string',
            'serial_labs.*.albubin' => 'nullable|string',
            'serial_labs.*.ldh' => 'nullable|string',
            'serial_labs.*.il_6_8_10' => 'nullable|string',
            'serial_labs.*.abg' => 'nullable|string',
            'serial_labs.*.ph' => 'nullable|string',
            'serial_labs.*.pc02' => 'nullable|string',
            'serial_labs.*.po2' => 'nullable|string',
            'serial_labs.*.hco3' => 'nullable|string',
            'serial_labs.*.coagulation_profile' => 'nullable|string',
            'serial_labs.*.aptt' => 'nullable|string',
            'serial_labs.*.pt' => 'nullable|string',
            'serial_labs.*.inr' => 'nullable|string',
            'serial_labs.*.d_dimer' => 'nullable|string',
            'serial_labs.*.fibrinogen' => 'nullable|string',
            'serial_labs.*.electrolytes' => 'nullable|string',
            'serial_labs.*.na' => 'nullable|string',
            'serial_labs.*.k' => 'nullable|string',
            'serial_labs.*.cl' => 'nullable|string',
            'serial_labs.*.bicarbonates' => 'nullable|string',
            'serial_labs.*.hba1c' => 'nullable|string',
            'serial_labs.*.spo2' => 'nullable|string',

            // --- CULTURES ---
            'cultures' => 'nullable|array',
            'cultures.*.day' => 'nullable|string',
            'cultures.*.specimen_type' => 'nullable|string',
            'cultures.*.testing_date' => 'nullable|date',
            'cultures.*.organism_name' => 'nullable|string',

            // --- CULTURE SENSITIVITIES ---
            'cultures.*.sensitivities' => 'nullable|array',
            'cultures.*.sensitivities.*.antibiotic_name' => 'nullable|string',
            'cultures.*.sensitivities.*.result' => 'nullable|string',
        ];
    }
}
