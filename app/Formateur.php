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
        'username', 'civilite', 'prenom', 'nom', 'date_naiss', 'contratcadre', 'tel_1', 'email', 'password',

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function chantiers()
    {
       return $this->belongsToMany('App\Chantier_ecole','chantier_formateur','chantier_id','formateur_id');
    }
    public function Modules()
    {
        return $this->hasMany(Module::class);
    }

    public function classes()
    {
        return $this->belongsToMany(Classe::class);
    }

    public function apprenants()
    {
        return $this->classes()->withCount('apprenant');
    }

}
