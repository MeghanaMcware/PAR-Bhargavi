<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CultureSensitivity extends Model
{
    protected $fillable = [
        'culture_id',
        'antibiotic_name',
        'result'
    ];

    public function culture()
    {
        return $this->belongsTo(Culture::class);
    }
}
