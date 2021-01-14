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
         'email', 'password','adressse','tel',
        'role','nom_prenom','photo','reference','cv','contrat',
        'duty_start','duty_end','duty_start','duty_end'

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
