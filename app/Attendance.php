<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classe;
use App\Formateur;
use App\Apprenant;


class Attendance extends Model
{
    protected $fillable = [
        'class_id',
        'formateur_id',
        'apprenant_id',
        'attendence_date',
        'attendence_status'
    ];

    public function apprenant() {
        return $this->belongsTo(Apprenant::class);
    }

    public function formateur() {
        return $this->belongsTo(Formateur::class);
    }

    public function class() {
        return $this->belongsTo(Classe::class);
    }
}
