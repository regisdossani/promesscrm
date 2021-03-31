<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classe;
use App\Formateur;
use App\Apprenant;

class Teacherattendance extends Model
{
    protected $fillable = [
        'class_id',
        'formateur_id',
        'date',
        'attendence_status'
    ];

    protected $casts = [
        'date' => 'date:d-m-Y',
    ];

    public function formateur() {
        return $this->belongsTo(Formateur::class);
    }

    public function classe() {
        return $this->belongsTo(Classe::class);
    }

}
