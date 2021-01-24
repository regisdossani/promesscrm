<?php

namespace App;

use App\Classe;
use App\Filiere;
use App\Promo;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable = [
        'provenance',  'nom', 'email', 'tel','sexe',
       'reception_dossier','pj_depotdossier',
        'region','pj_depotdossier2','promo_id','filiere_id','parrain',
        'tel_parrain','email_parrain'
    ];
    protected $table = 'candidats';


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
     public function filiere() {
        return $this->hasOne(Filiere::class,'filiere_id');
    }
}
