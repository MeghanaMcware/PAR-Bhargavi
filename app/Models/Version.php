<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $fillable = [
        'name',
        'code',
        'title',
        'type',
        'date',
        'pdf',
        'description',
        'status',
    ];
}
