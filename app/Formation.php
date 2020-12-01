<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'nom', 'annee', 'type',
    ];


    
}
