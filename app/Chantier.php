<?php

namespace App;
use Apprenant;
use Professionnels;
use Formateurs;
use Illuminate\Database\Eloquent\Model;

class Chantier extends Model
{
    protected $fillable = [
        'titre', 'teacher_id', 'reference','date', 'fiche_descriptive','duree_j',
        'duree_h',
        'maitre_oeuvre','nbre_appt','descriptif','fiche_descriptive','etat','obs'
    ];



    public function apprenants()
    {
       return $this->belongsToMany(Apprenant::class,'apprenant_chantier');
    }

     public function formateurs()
    {
       return $this->belongsTo(Formateur::class,'formateur_id');
    }
    public function newchantier()
    {
       return $this->belongsTo(Newchantier::class,'newchantier_id');
    }

}
