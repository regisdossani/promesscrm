<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'nom', 'annee'
    ];
    public function candidat(){
        return $this->hasOne(Candidat::class);
    }
   /*  public function apprenants(){
        return $this->belongsTo(Candidat::class);
    } */

}
