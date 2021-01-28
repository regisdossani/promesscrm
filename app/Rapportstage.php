<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapportstage extends Model
{
    protected $fillable=['prenom','nom','date_naiss','lieu_naiss',
    'filiere','annee','date','duree','referent','encadreur','promo','apprenant'
];

    public function apprenants(){
        return $this->hasMany(Apprenant::class);
    }
    public function filieres(){
        return $this->hasMany(Filiere::class);
    }
    public function promos(){
        return $this->hasMany(Promo::class);
    }
}
