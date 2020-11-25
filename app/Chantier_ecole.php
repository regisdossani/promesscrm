<?php

namespace App;
use Apprenant;
use Professionnels;
use Formateurs;
use Illuminate\Database\Eloquent\Model;

class Chantier_ecole extends Model
{
    public function apprenants()
    {
       return $this->belongsToMany('App\Apprenant','apprenant_chantier','apprenant_id','chantier_id')
       ->withPivot('professionnel_id','formateur_id');
    }


  /*   public function apprenants()
    {
       return $this->belongsToMany('App\Professionnel','chantier_professionnel','professionnel_id','chantier_id');
    } */
    /* public function formateurs()
    {
       return $this->belongsToMany('App\Formateur','chantier_formateur','formateur_id','chantier_id');
    }
 */


    public function client()
    {
        return $this->belongsTo('App\Client','client_id');
    }

}
