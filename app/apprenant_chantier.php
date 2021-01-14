<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apprenant_chantier extends Model
{
     /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    public $table = 'apprenant_chantier';
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $fillable = [
        'chantier_id','apprenant_id'
    ];
}
