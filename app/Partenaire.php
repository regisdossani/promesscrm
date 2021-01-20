<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    protected $fillable = [
        'raison_social', 'nom_referent', 'type_organisation','tel','email','type_partenariat'
    ];
}
