<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichedescriptive extends Model
{
    protected $fillable = [
        'titre',  'context', 'besoins', 'dimensionnement', 'interventions','devis_id','cout',
    ];
}
