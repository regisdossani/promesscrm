<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReleveFinal extends Model
{
    protected $fillable = [

        'moyenne_eleve','','apprenant_id','classe_id','pdt_jury',
        'nbre_candidat','moyenne_generale','mention','nom_directeur'
    ];
}
