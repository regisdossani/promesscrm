<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacherattendance extends Model
{
    protected $fillable = [
        'class_id',
        'formateur_id',
        'date',
        'attendence_status'
    ];
}
