<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pers_ressource extends Model
{
    protected $fillable = [
        'nom', 'reference', 'sexe','tel','email','qualite','specialites','atelier_de_juillet_2018','formation_de_janvier_2019','piece_jointe',
    ];
}
