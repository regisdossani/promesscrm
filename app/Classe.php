<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'name',
        'filiere_id',
        'class_description'
    ];



    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }


    public function apprenants()
    {
        return $this->hasMany(Apprenant::class);
    }



    public function formateur()
    {
        return $this->belongsToMany(Formateur::class);
    }

    public function filiere() {
        return $this->belongsTo(Filiere::class);
    }
}
