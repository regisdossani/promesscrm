<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encadreur extends Model
{
    protected $table = 'encadreurs';

    protected $fillable = [
        'stage_id',
        'formateur_id'
    ];

    public $timestamps = true;

}
