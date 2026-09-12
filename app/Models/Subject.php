<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'subject_code',
        'name',
        'description',
        'grade_level',
        'credit_hours',
        'status',
    ];
}
