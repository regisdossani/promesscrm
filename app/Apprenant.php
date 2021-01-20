<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Apprenant extends Authenticatable
{
    use Notifiable,      HasRoles;
    protected $guard_name = 'web';

    protected $table = 'apprenants';

    protected $fillable = [
         'email', 'password','annee','visite_terain','lieu_naiss','date_naiss'
       ,'prenom','nom','candidat_id','filiere_id','tel','promo_id','reference','sexe','annee'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];



 public function stages()
{
   return $this->belongsToMany(Stage::class,'apprenant_stage','apprenant_id','stage_id') ;
}
public function chantiers()
{
   return $this->belongsToMany(Chantier::class,'apprenant_chantier');

}


    public function candidat()
    {
        return $this->hasOne(Candidat::class);
    }


    public function promos()
     {
             return $this->belongsTo(Promo::class,'promo_id');
     }
     public function filieres()
     {
             return $this->belongsTo(Filiere::class,'filiere_id');
     }


}
