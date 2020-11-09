<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professionnel extends Model
{
    protected $fillable = [
        'date_naiss', 'nom', 'date_naiss','tel_1','tel_2',
        'email_1','email_2','nature_activite','nature_commentaire',
        'nombre_employe','zone_intervention','exemple_realisation','pjexemple_realisation'
    ];


    public function stages()
	{
            return $this->hasMany('App\Stage',App\Professionnel);
    }

    public function chantiers()
{
   return $this->belongsToMany('App\Chantier_ecole','chantier_professionnel','chantier_id','professionnel_id');
}

}
