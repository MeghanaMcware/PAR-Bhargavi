<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SerialLab extends Model
{
    protected $fillable = [
        'patient_id',
        'day',
        'lab_parameters',
        'wbc_tc',
        'bands_left_shift',
        'nlr',
        'platelets',
        'hb',
        'pct',
        'crp',
        's_lactate',
        'urea_bun',
        's_creatinine',
        'ast',
        'alt',
        's_bilurubin',
        'albubin',
        'ldh',
        'il_6_8_10',
        'abg',
        'ph',
        'pc02',
        'po2',
        'hco3',
        'coagulation_profile',
        'aptt',
        'pt',
        'inr',
        'd_dimer',
        'fibrinogen',
        'electrolytes',
        'na',
        'k',
        'cl',
        'bicarbonates',
        'hba1c',
        'spo2'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
