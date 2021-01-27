<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $fillable = [
        'encadreur_id', 'date',
        'duree','referent','entreprise'
    ];
    // public function professionnel()
    // {

    //     return $this->belongsTo('App\Professionel','professionnel_id');
    // }


    public function encadreur()
    {
        return $this->belongsTo(Encadreur::class,'encadreur_id');
    }



/*     public function stagiaires()
{
   return $this->belongsToMany(Stagiaires::class,'stage_stagiaire','stagiaire_id','stage_id');
}
 */
public function apprenants()
{
   return $this->belongsToMany(Apprenant::class,'apprenant_stage','stage_id','apprenant_id');
}
}
