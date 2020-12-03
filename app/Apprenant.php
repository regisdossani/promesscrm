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
        'username', 'email', 'password','visite_terain1','visite_terain2','visite_terain3','note_3','note_2','note_1',
        'note_3','prenom','nom','candidat_id','formation_id','classe_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];



 public function stages()
{
   return $this->belongsToMany(Stage::class,'apprenant_stage','apprenant_id','stage_id')
   ;
}
public function chantiers()
{
   return $this->belongsToMany(Chantier_ecole::class,'apprenant_chantier','chantier_id','apprenant_id')
   ->withPivot('professionnel_id','formateur_id');
}


 public function candidat()
{
    return $this->hasOne(Candidat::class);
}
public function class()
{
    return $this->belongsTo(Classe::class, 'classe_id');
}

/* public function schoolattendances()
{
    return $this->hasMany(Schoolattendance::class);
} */
}
