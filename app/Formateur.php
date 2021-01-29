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
        'email', 'prenom','nom','formation','structure','fonction',
        'adresse','sexe','lieu_naiss','date_naiss','reference','tel','formation','module_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function chantiers()
    {
       return $this->hasMany(Chantier::class,'chantier_id');
    }

    public function matieres()
    {
       return $this->hasMany(Matieres::class);
    }

   

     public function classes()
    {
        return $this->belongsToMany(Classe::class,'classe_formateur');
    }

    public function apprenants()
    {
        return $this->classes()->withCount('apprenant');
    }

}
