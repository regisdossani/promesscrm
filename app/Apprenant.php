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
        'username', 'email', 'password','visite_terain','note_3','note_2','note_1',
        'note_3','prenom','nom','candidat_id','formation_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];



 public function stages()
{
   return $this->belongsToMany('App\Stage','apprenant_stage','apprenant_id','stage_id')
   ;
}
public function chantiers()
{
   return $this->belongsToMany('App\Chantier_ecole','apprenant_chantier','chantier_id','apprenant_id')
   ->withPivot('professionnel_id','formateur_id');
}


 public function candidat()
{
    return $this->hasOne('App\Candidat');
}
public function class()
{
    return $this->belongsTo(Classe::class, 'class_id');
}

public function schoolattendances()
{
    return $this->hasMany(Schoolattendance::class);
}
}
