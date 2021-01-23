<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $fillable = [
        'nom', 'annee'
    ];


    public function apprenant(){
        return $this->belongsTo(Apprenant::class,'filiere_id');
    }

}
