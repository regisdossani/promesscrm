<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suivipostchantier extends Model
{
    protected $fillable = [
        'chantier_id', 'evaluation', 'maintenance',
    ];
}
