<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entpartenaire extends Model
{
    protected $fillable = [
         'raison_sociale', 'email', 'tel','reference','activite_entreprise','tel','email'
    ];
}
