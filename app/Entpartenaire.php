<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entpartenaire extends Model
{
    protected $fillable = [
         'raison_sociale', 'contact_mail', 'contact_tel','reference','activite_entreprise',
         'responsable'
    ];
}
