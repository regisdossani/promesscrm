<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable = [
        'provenance',  'nom', 'email', 'tel',
        'type_formation','reception_dossier','pj_depotdossier','test_ecrit','entretien','test_pj',
        'region','commentaire','pj_depotdossier2','resultat','promo','filiere','parrain',
        'tel_parrain','email_parrain'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];


    /*  public function apprenant()
     {
             return $this->belongsTo('App\Apprenant','candidat_id');
     } */
     public function promo()
     {
             return $this->belongsTo(Promo::class,'promo');
     }
     public function filiere()
     {
             return $this->belongsTo(Filiere::class,'filiere');
     }
}
