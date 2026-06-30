<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalRegistration extends Model
{
    protected $fillable = [
        'patient_id',
        'sepsis_diagnosis',
        'consent_share',
        'name',
        'email',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($registration) {
            $registration->patient_id = 'PID-' . str_pad($registration->id, 3, '0', STR_PAD_LEFT);
            $registration->save();
        });
    }
}
