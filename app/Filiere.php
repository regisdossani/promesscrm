<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $fillable = [
        'nom', 'annee'
    ];

/*  public function candidat(){
    return $this->belongsTo(Candidat::class);
} */
    /* public function apprenant()
        {
                return $this->belongsTo(Filiere::class,'filiere_id');
        } */

}
