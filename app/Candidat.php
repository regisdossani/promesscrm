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
        'region','pj_depotdossier2','filiere_id','promo_id','parrain',
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


    public function filiere() {
        return $this->belongsTo(Filiere::class,'filiere_id');
    }
    public function promo() {
        return $this->belongsTo(Promo::class,'promo_id');
    }

    public function assignedTest() {
        return $this->hasOne(Testcandidat::class, 'candidat_id', 'id');
    }
}
