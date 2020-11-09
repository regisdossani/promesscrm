<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    protected $fillable = [
        'nom', 'champ_activite', 'type_partenariat','modalite',
    ];
}
