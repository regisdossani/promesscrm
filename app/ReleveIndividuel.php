<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Filiere;
use Module;
use Classe;
use Apprenant;
use Nosmatiere;


class ReleveIndividuel extends Model
{
    protected $fillable = [

        'moyenne_eleve','appreciations_generales','apprenant_id','classe_id',
        'felicitations','encouragements','th','passable','insuffisant','nom_directeur'
    ];
}
