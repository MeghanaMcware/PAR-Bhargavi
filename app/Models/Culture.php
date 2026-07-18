<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    protected $fillable = [
        'patient_id',
        'day',
        'specimen_type',
        'testing_date',
        'organism_name'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function sensitivities()
    {
        return $this->hasMany(CultureSensitivity::class);
    }
}
