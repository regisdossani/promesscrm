<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable = [
        'date_naiss', 'civilite', 'statut', 'nom', 'adresse', 'choix_formation', 'email_1', 'email_2','prenom', 'tel_1','tel_2', 'avatar',
        'parrain','depot_dossier','pj_depotdossier','test_ecrit','test_oral','test_pj',
        'orientation','commentaire','avatar','pj_depotdossier2'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];


     public function apprenant()
     {

             return $this->hasOne('App\Apprenant','candidat_id');
     }
}
