<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'hospital_code',
        'uhid',
        'date_of_admission',
        'time_of_presentation',
        'age',
        'sex',
        'chief_complaints',
        'diagnosis',
        'symptom_duration',
        'comorbidities_cc_index',
        'comorbidity_less_5_years',
        'previously_ill_last_3_months',
        'prev_antibiotic_last_3_months',
        'initial_probable_sepsis_diagnosis',
        'direct_or_referred'
    ];

    public function clinicalAssessment()
    {
        return $this->hasOne(ClinicalAssessment::class);
    }

    public function serialLabs()
    {
        return $this->hasMany(SerialLab::class);
    }

    public function cultures()
    {
        return $this->hasMany(Culture::class);
    }
}
