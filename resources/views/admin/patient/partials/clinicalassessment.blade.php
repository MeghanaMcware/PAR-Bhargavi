 <div class="patient-card">

                                <h3 class="page-title  mb-0 pt-3 pb-0 me-3">
                                    <span class="step-no">2</span>
                                    Clinical Assessment
                                </h3>
                                <div class="card-body pt-3 pb-3">
                                    <div class="row mb-3 pt-3 pb-3">
 <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">Hospital code</label>
                                            <input class="form-control" type="text" name="Date_admission"
                                                placeholder="Enter Hospital code">
                                            <div class="invalid-feedback">
                                                Please enter Hospital code
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-4 col-12">
                                            <label class="form-label mb-0">UHID/Rgen No.</label>
                                            <input class="form-control" type="text" name="Date_admission"
                                                placeholder="Enter UHID/Rgen No.">
                                            <div class="invalid-feedback">
                                                Please enter UHID/Rgen No.
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">SOFA score at admission</label>
                                            <input class="form-control" type="text" name="sofa_score_admission"
                                                value="{{ old('sofa_score_admission', $patient->clinicalAssessment?->sofa_score_admission ?? '') }}" placeholder="Enter SOFA score at admission">

                                            <div class="invalid-feedback">
                                                Please enter SOFA score at admission
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">qSOFA Score</label>
                                            <input class="form-control" type="text" name="qsofa_score"
                                                value="{{ old('qsofa_score', $patient->clinicalAssessment?->qsofa_score ?? '') }}" placeholder="Enter qSOFA Score">

                                            <div class="invalid-feedback">
                                                Please enter qSOFA Score
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">MEWS Score</label>
                                            <input class="form-control" type="text" name="mews_score"
                                                value="{{ old('mews_score', $patient->clinicalAssessment?->mews_score ?? '') }}" placeholder="Enter MEWS Score">

                                            <div class="invalid-feedback">
                                                Please enter MEWS Score
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12 mb-3">
                                            <label class="form-label mb-0">NEWS Score</label>
                                            <input class="form-control" type="text" name="news_score"
                                                value="{{ old('news_score', $patient->clinicalAssessment?->news_score ?? '') }}" placeholder="Enter NEWS Score">

                                            <div class="invalid-feedback">
                                                Please enter NEWS Score
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12 mb-3">
                                            <label class="form-label mb-0">MDRO Screening</label>
                                            <input class="form-control" type="text" name="mdro_screening"
                                                value="{{ old('mdro_screening', $patient->clinicalAssessment?->mdro_screening ?? '') }}" placeholder="Enter MDRO Screening">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6 col-12">
                                            <label class="form-label mb-0">Organ dysfunction?
                                                Renal/Metabolic/cardiac/haematology/respiratory</label>
                                            <input class="form-control" type="text" name="organ_dysfunction"
                                                value="{{ old('organ_dysfunction', $patient->clinicalAssessment?->organ_dysfunction ?? '') }}" placeholder="Enter Organ dysfunction? Renal/Metabolic/cardiac/haematology/respiratory">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">1st Lactate Value ordered date</label>
                                            <input class="form-control" type="date" name="first_lactate_ordered_date"
                                                value="{{ old('first_lactate_ordered_date', $patient->clinicalAssessment?->first_lactate_ordered_date ?? '') }}" placeholder="dd-mm-yyyy">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">First Lactate Value ordered time</label>
                                            <input class="form-control" type="time" name="first_lactate_ordered_time" value="{{ old('first_lactate_ordered_time', $patient->clinicalAssessment?->first_lactate_ordered_time ?? '') }}" placeholder="">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">First Lactate Value </label>
                                            <input class="form-control" type="text" name="first_lactate_value"
                                                value="{{ old('first_lactate_value', $patient->clinicalAssessment?->first_lactate_value ?? '') }}" placeholder="Enter First Lactate Value ">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Blood cultures sent date </label>
                                            <input class="form-control" type="date" name="blood_cultures_sent_date"
                                                value="{{ old('blood_cultures_sent_date', $patient->clinicalAssessment?->blood_cultures_sent_date ?? '') }}" placeholder="dd-mm-yyyy">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Name other samples sent for cultures</label>
                                            <input class="form-control" type="text" name="other_samples_sent_cultures"
                                                value="{{ old('other_samples_sent_cultures', $patient->clinicalAssessment?->other_samples_sent_cultures ?? '') }}" placeholder="Enter Name other samples sent for cultures">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Other Culture sent date</label>
                                            <input class="form-control" type="date" name="other_culture_sent_date"
                                                value="{{ old('other_culture_sent_date', $patient->clinicalAssessment?->other_culture_sent_date ?? '') }}" placeholder="dd-mm-yyyy">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">other Culture sent time</label>
                                            <input class="form-control" type="time" name="other_culture_sent_time" value="{{ old('other_culture_sent_time', $patient->clinicalAssessment?->other_culture_sent_time ?? '') }}" placeholder="">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">First dose antibiotic administered Date</label>
                                            <input class="form-control" type="text" name="first_dose_antibiotic_date"
                                                value="{{ old('first_dose_antibiotic_date', $patient->clinicalAssessment?->first_dose_antibiotic_date ?? '') }}" placeholder="Enter First dose antibiotic administered Date">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Name of emperical antibiotic</label>
                                            <input class="form-control" type="text" name="name_emperical_antibiotic"
                                                value="{{ old('name_emperical_antibiotic', $patient->clinicalAssessment?->name_emperical_antibiotic ?? '') }}" placeholder="Enter Name of emperical antibiotic">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Initial fluid administered</label>
                                            <input class="form-control" type="text" name="initial_fluid_administered"
                                                value="{{ old('initial_fluid_administered', $patient->clinicalAssessment?->initial_fluid_administered ?? '') }}" placeholder="Enter Initial fluid administered">

                                            <div class="invalid-feedback">
                                                Please enter MDRO Screening
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">volume fluid administered</label>
                                            <input class="form-control" type="text" name="volume_fluid_administered"
                                                value="{{ old('volume_fluid_administered', $patient->clinicalAssessment?->volume_fluid_administered ?? '') }}" placeholder="Enter volume fluid administered">


                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Pateint response post infusion</label>
                                            <input class="form-control" type="text" name="patient_response_post_infusion"
                                                value="{{ old('patient_response_post_infusion', $patient->clinicalAssessment?->patient_response_post_infusion ?? '') }}" placeholder="Enter Pateint response post infusion">


                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Repeat Lactate after repeated
                                                infusion(if)</label>
                                            <input class="form-control" type="text" name="repeat_lactate_after_infusion"
                                                value="{{ old('repeat_lactate_after_infusion', $patient->clinicalAssessment?->repeat_lactate_after_infusion ?? '') }}" placeholder="Enter Repeat Lactate after repeated infusion(if)">


                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">No. of organs affected(after lab reports)</label>
                                            <input class="form-control" type="number" name="no_of_organs_affected"
                                                value="{{ old('no_of_organs_affected', $patient->clinicalAssessment?->no_of_organs_affected ?? '') }}" placeholder="Enter No. of organs affected(after lab reports)">


                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Any surgery(<28 Days)</label>
                                                    <input class="form-control" type="number" name="any_surgery_28_days"
                                                        value="{{ old('any_surgery_28_days', $patient->clinicalAssessment?->any_surgery_28_days ?? '') }}" placeholder="Enter Any surgery(<28 Days)">


                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Molecular tests ordered date</label>
                                            <input class="form-control" type="date" name="molecular_tests_ordered_date"
                                                value="{{ old('molecular_tests_ordered_date', $patient->clinicalAssessment?->molecular_tests_ordered_date ?? '') }}" placeholder="dd-mm-yyyy">


                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Which molecular test</label>
                                            <input class="form-control" type="text" name="which_molecular_test"
                                                value="{{ old('which_molecular_test', $patient->clinicalAssessment?->which_molecular_test ?? '') }}" placeholder="Enter Which molecular test">


                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Molecular tests result received date</label>
                                            <input class="form-control" type="date" name="molecular_tests_result_received_date"
                                                value="{{ old('molecular_tests_result_received_date', $patient->clinicalAssessment?->molecular_tests_result_received_date ?? '') }}" placeholder="Enter Molecular tests result received date">


                                        </div>

                                        <!-- Blood Culture Result -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Blood Culture Result</label>
                                            <select class="form-select" name="blood_culture_result">
                                                <option value="">Select</option>
                                                <option>Positive</option>
                                                <option>Negative</option>
                                                <option>No Growth</option>
                                                <option>Pending</option>
                                            </select>
                                        </div>

                                        <!-- Blood Culture Flagged Positive Date -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Blood Culture Flagged Positive Date</label>
                                            <input type="date" class="form-control" name="blood_culture_positive_date" value="{{ old('blood_culture_positive_date', $patient->clinicalAssessment?->blood_culture_positive_date ?? '') }}">
                                        </div>

                                        <!-- Blood Culture Flagged Positive Time -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Blood Culture Flagged Positive Time</label>
                                            <input type="time" class="form-control" name="blood_culture_positive_time" value="{{ old('blood_culture_positive_time', $patient->clinicalAssessment?->blood_culture_positive_time ?? '') }}">
                                        </div>

                                        <!-- Antibiotic Changed -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Antibiotic Changed After Blood Culture
                                                Report</label>
                                            <select class="form-select" name="antibiotic_changed">
                                                <option value="">Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>

                                        <!-- Rapid PCR Results -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Rapid PCRs on Blood Culture Results</label>
                                            <textarea class="form-control" name="rapid_pcr_results" rows="2"
                                                placeholder="Enter PCR Results">{{ old('rapid_pcr_results', $patient->clinicalAssessment?->rapid_pcr_results ?? '') }}</textarea>
                                        </div>

                                        <!-- Antibiotics Change After Rapid PCR -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Antibiotics Change After Rapid PCR</label>
                                            <select class="form-select" name="antibiotics_change_after_pcr">
                                                <option value="">Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>

                                        <!-- Other Culture Growth Reported On -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Other Culture Growth Reported On</label>
                                            <input type="date" class="form-control" name="other_culture_reported_on" value="{{ old('other_culture_reported_on', $patient->clinicalAssessment?->other_culture_reported_on ?? '') }}">
                                        </div>

                                        <!-- Sample From Which Culture Growth Reported -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Sample From Which Culture Growth Reported</label>
                                            <input type="text" class="form-control" name="sample_culture_growth"
                                                value="{{ old('sample_culture_growth', $patient->clinicalAssessment?->sample_culture_growth ?? '') }}" placeholder="Enter Sample Type">
                                        </div>

                                        <!-- ESBL / CRE / CRAB / MRSA / VRE -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">ESBL / CRE / CRAB / MRSA / VRE</label>
                                            <select class="form-select" name="resistant_organism">
                                                <option value="">Select</option>
                                                <option>ESBL</option>
                                                <option>CRE</option>
                                                <option>CRAB</option>
                                                <option>MRSA</option>
                                                <option>VRE</option>
                                                <option>None</option>
                                            </select>
                                        </div>

                                        <!-- MDRO Screening @ Admission Result -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">MDRO Screening @ Admission Result</label>
                                            <select class="form-select" name="mdro_screening_result">
                                                <option value="">Select</option>
                                                <option>Positive</option>
                                                <option>Negative</option>
                                                <option>Pending</option>
                                                <option>Not Done</option>
                                            </select>
                                        </div>

                                        <!-- First USG Abdomen Done On -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">First USG Abdomen Done On</label>
                                            <input type="date" class="form-control" name="usg_abdomen_date" value="{{ old('usg_abdomen_date', $patient->clinicalAssessment?->usg_abdomen_date ?? '') }}">
                                        </div>

                                        <!-- USG Abdomen Findings -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">USG Abdomen Findings</label>
                                            <textarea class="form-control" name="usg_abdomen_findings" rows="2"
                                                placeholder="Enter USG Abdomen Findings">{{ old('usg_abdomen_findings', $patient->clinicalAssessment?->usg_abdomen_findings ?? '') }}</textarea>
                                        </div>

                                        <!-- First Chest X-Ray Done On -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">First Chest X-Ray Done On</label>
                                            <input type="date" class="form-control" name="chest_xray_date" value="{{ old('chest_xray_date', $patient->clinicalAssessment?->chest_xray_date ?? '') }}">
                                        </div>

                                        <!-- Chest X-Ray Findings -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Chest X-Ray Findings</label>
                                            <textarea class="form-control" name="chest_xray_findings" rows="2"
                                                placeholder="Enter Chest X-Ray Findings">{{ old('chest_xray_findings', $patient->clinicalAssessment?->chest_xray_findings ?? '') }}</textarea>
                                        </div>

                                        <!-- PET/CT Done On -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">PET/CT Done On</label>
                                            <input type="date" class="form-control" name="pet_ct_date" value="{{ old('pet_ct_date', $patient->clinicalAssessment?->pet_ct_date ?? '') }}">
                                        </div>

                                        <!-- PET/CT Findings -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">PET/CT Findings</label>
                                            <textarea class="form-control" name="pet_ct_findings" rows="2"
                                                placeholder="Enter PET/CT Findings">{{ old('pet_ct_findings', $patient->clinicalAssessment?->pet_ct_findings ?? '') }}</textarea>
                                        </div>

                                        <!-- Follow Up CT Scan Done On -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Follow Up CT Scan Done On</label>
                                            <input type="date" class="form-control" name="followup_ct_date" value="{{ old('followup_ct_date', $patient->clinicalAssessment?->followup_ct_date ?? '') }}">
                                        </div>

                                        <!-- Follow Up CT Scan Findings -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Follow Up CT Scan Findings</label>
                                            <textarea class="form-control" name="followup_ct_findings" rows="2"
                                                placeholder="Enter Follow Up CT Scan Findings">{{ old('followup_ct_findings', $patient->clinicalAssessment?->followup_ct_findings ?? '') }}</textarea>
                                        </div>

                                        <!-- Repeat Date(s) of Chest X-Ray -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Repeat Date(s) of Chest X-Ray</label>
                                            <input type="text" class="form-control" name="repeat_chest_xray_dates"
                                                value="{{ old('repeat_chest_xray_dates', $patient->clinicalAssessment?->repeat_chest_xray_dates ?? '') }}" placeholder="e.g. 10/06/2026, 15/06/2026">
                                        </div>

                                        <!-- Findings of X-Ray -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Findings of X-Ray (Worsening / Better / New
                                                Changes)</label>
                                            <textarea class="form-control" name="xray_findings" rows="2"
                                                placeholder="Enter X-Ray Findings">{{ old('xray_findings', $patient->clinicalAssessment?->xray_findings ?? '') }}</textarea>
                                        </div>

                                        <!-- Pleural Tapping Date -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Pleural Tapping (If Done) Date</label>
                                            <input type="date" class="form-control" name="pleural_tapping_date" value="{{ old('pleural_tapping_date', $patient->clinicalAssessment?->pleural_tapping_date ?? '') }}">
                                        </div>

                                        <!-- Pleural Fluid Culture Results -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Pleural Fluid Culture Results</label>
                                            <textarea class="form-control" name="pleural_fluid_culture" rows="2"
                                                placeholder="Enter Culture Results">{{ old('pleural_fluid_culture', $patient->clinicalAssessment?->pleural_fluid_culture ?? '') }}</textarea>
                                        </div>

                                        <!-- Day of Change of Antibiotics -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Day of Change of Antibiotics</label>
                                            <input type="number" class="form-control" name="day_antibiotic_change" min="0"
                                                value="{{ old('day_antibiotic_change', $patient->clinicalAssessment?->day_antibiotic_change ?? '') }}" placeholder="Days">
                                        </div>

                                        <!-- Days of Empirical Antibiotic Therapy -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Days of Empirical Antibiotic Therapy</label>
                                            <input type="number" class="form-control" name="empirical_antibiotic_days"
                                                min="0" value="{{ old('empirical_antibiotic_days', $patient->clinicalAssessment?->empirical_antibiotic_days ?? '') }}" placeholder="Days">
                                        </div>

                                        <!-- Days of Definitive Antibiotic Therapy -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Days of Definitive Antibiotic Therapy</label>
                                            <input type="number" class="form-control" name="definitive_antibiotic_days"
                                                min="0" value="{{ old('definitive_antibiotic_days', $patient->clinicalAssessment?->definitive_antibiotic_days ?? '') }}" placeholder="Days">
                                        </div>

                                        <!-- Source Established -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Source Established? Where?</label>
                                            <input type="text" class="form-control" name="source_established"
                                                value="{{ old('source_established', $patient->clinicalAssessment?->source_established ?? '') }}" placeholder="Enter Source">
                                        </div>

                                        <!-- Patient Outcome - Day 7 -->
                                        <div class="col-md-6 col-12 mb-3">
    <label class="form-label">Patient Outcome Day</label>

    <div id="patientOutcomeContainer">
        <div class="input-group mb-2">
            <input type="text"
                   class="form-control"
                   name="patient_outcome_day[]"
                   placeholder="Enter Patient Outcome Day"
                   >

            <button type="button" class="btn btn-success btn-sm" onclick="addPatientOutcome()">
                +
            </button>
        </div>
    </div>
</div>



                                        <!-- ICU Hospitalization -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Days of ICU Hospitalization</label>
                                            <input type="number" class="form-control" name="icu_days" min="0"
                                                value="{{ old('icu_days', $patient->clinicalAssessment?->icu_days ?? '') }}" placeholder="Days">
                                        </div>

                                        <!-- Ward Hospitalization -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Days of Ward Hospitalization</label>
                                            <input type="number" class="form-control" name="ward_days" min="0"
                                                value="{{ old('ward_days', $patient->clinicalAssessment?->ward_days ?? '') }}" placeholder="Days">
                                        </div>

                                        <!-- Discharge Date -->
                                        <div class="col-md-4 col-12 mb-3">
                                            <label class="form-label mb-0">Discharge Date</label>
                                            <input type="date" class="form-control" name="discharge_date" value="{{ old('discharge_date', $patient->clinicalAssessment?->discharge_date ?? '') }}">
                                        </div>

                                        <div class="row">
    <div class="col-md-4">
        <label for="sirs_datetime" class="form-label">
            Date & Time of Meeting SIRS Criteria
            
        </label>
        <input type="datetime-local"
               class="form-control"
               id="sirs_datetime"
               name="sirs_datetime"
               >
    </div>
    <div class="col-md-4">
    <label for="blood_culture_send_time" class="form-label">
        Blood Culture Send Time 
    </label>
    <input type="time"
           class="form-control"
           id="blood_culture_send_time"
           name="blood_culture_send_time"
           >
</div>
<div class="col-md-4">
    <label for="first_dose_antibiotic_time" class="form-label">
        First Dose Antibiotic Administered Time 
    </label>
    <input type="time"
           class="form-control"
           id="first_dose_antibiotic_time"
           name="first_dose_antibiotic_time"
           >
</div>
</div>

                                        <div class="d-flex justify-content-between align-items-center mt-5">

                                            <button type="button" class="btn btn-secondary px-4" onclick="previousStep()">
                                                <i class="fa fa-arrow-left me-2"></i> Previous
                                            </button>

                                            <div>
                                                <button type="submit" class="btn btn-success me-2" name="save_progress" value="true"><i class="fa fa-save"></i> Save Progress</button>
                                                <button type="button" class="btn btn-primary px-4" onclick="nextStep()">
                                                    Next <i class="fa fa-arrow-right ms-2"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
