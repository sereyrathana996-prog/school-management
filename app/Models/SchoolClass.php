<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    protected $table = 'classes';
    
    protected $fillable =[
        "class_code",
        "name",
        "grade_level",
        "section",
        "academic_year",
        "room",
        "capacity",
        "status",
    ];
}
