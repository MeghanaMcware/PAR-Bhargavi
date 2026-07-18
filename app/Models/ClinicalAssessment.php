<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicalAssessment extends Model
{
    protected $fillable = [
        'patient_id',
        'sofa_score_admission',
        'qsofa_score',
        'mews_score',
        'news_score',
        'mdro_screening',
        'organ_dysfunction',
        'first_lactate_ordered_date',
        'first_lactate_ordered_time',
        'first_lactate_value',
        'blood_cultures_sent_date',
        'other_samples_sent_cultures',
        'other_culture_sent_date',
        'other_culture_sent_time',
        'first_dose_antibiotic_date',
        'name_emperical_antibiotic',
        'initial_fluid_administered',
        'volume_fluid_administered',
        'patient_response_post_infusion',
        'repeat_lactate_after_infusion',
        'no_of_organs_affected',
        'any_surgery_28_days',
        'molecular_tests_ordered_date',
        'which_molecular_test',
        'molecular_tests_result_received_date',
        'blood_culture_result',
        'blood_culture_positive_date',
        'blood_culture_positive_time',
        'antibiotic_changed',
        'rapid_pcr_results',
        'antibiotics_change_after_pcr',
        'other_culture_reported_on',
        'sample_culture_growth',
        'resistant_organism',
        'mdro_screening_result',
        'usg_abdomen_date',
        'usg_abdomen_findings',
        'chest_xray_date',
        'chest_xray_findings',
        'pet_ct_date',
        'pet_ct_findings',
        'followup_ct_date',
        'followup_ct_findings',
        'repeat_chest_xray_dates',
        'xray_findings',
        'pleural_tapping_date',
        'pleural_fluid_culture',
        'day_antibiotic_change',
        'empirical_antibiotic_days',
        'definitive_antibiotic_days',
        'source_established',
        'outcome_day7',
        'outcome_day14',
        'outcome_day21',
        'outcome_day28',
        'icu_days',
        'ward_days',
        'discharge_date'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
