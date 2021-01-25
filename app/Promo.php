<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'nom', 'annee'
    ];

    public function candidats() {
        return $this->hasMany('App\Candidat','promo_id');

    }

}
