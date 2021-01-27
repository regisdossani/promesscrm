<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $fillable = [
        'nom', 'annee'
    ];


 public function candidats()
{
    return $this->hasMany('App\Candidat','filiere_id','id');
}
public function apprenants()
{
    return $this->hasMany('App\Apprenant','filiere_id','id');
}

}
