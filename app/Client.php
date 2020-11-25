<?php

namespace App;
use Chantier_ecole;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'civilite',  'nom', 'email', 'prenom', 'tel_1','tel_2',
    ];
}
