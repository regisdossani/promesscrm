<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Equipe extends Authenticatable
{
    use Notifiable,HasRoles;


     protected $table = 'equipes';
     protected $guard_name = 'web';

    protected $fillable = [
        'username', 'email', 'password','adressse','tel_1','tel_2','email_2',
        'titre_poste','prenom','nom','avatar','date_naiss','cv','status',
        'duty_start','duty_end'

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
