<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $fillable = [
        'titre', 'stage_entreprise', 'stage_debut',
        'stage_fin','pjconvention_stage','professionnel_id',
    ];
    // public function professionnel()
    // {

    //     return $this->belongsTo('App\Professionel','professionnel_id');
    // }


    public function encadreurs()
    {
        return $this->belongsToMany(Encadreur::class,'encadreur_stage','stage_id','encadreur_id');
    }



    public function stagiaires()
{
   return $this->belongsToMany(Stagiaires::class,'stage_stagiaire','stagiaire_id','stage_id');
}

}
