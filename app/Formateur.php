<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Formateur extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $guard_name = 'web';



    protected $fillable = [
        'email', 'prenom','nom','formation','contratcadre_pj','cv_pj','structure','fonction',
        'adresse','sexe',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function chantiers()
    {
       return $this->hasMany(Chantier::class,'chantier_id');
    }
    public function modules()
    {
       return $this->hasMany(Module::class,'module_id');
    }

   /*  public function Modules()
    {
        return $this->hasMany(Module::class);
    } */

     public function classes()
    {
        return $this->hasMany(Classe::class);
    }

    public function apprenants()
    {
        return $this->classes()->withCount('apprenant');
    }

}
