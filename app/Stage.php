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






    public function apprenant()
{
   return $this->belongsToMany('App\Apprenant','apprenant_stage','stage_id','apprenant_id');
}

}
