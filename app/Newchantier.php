<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newchantier extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'structure','tel','email','etat','valeur','description',
    ];

}
