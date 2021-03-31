<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use Notifiable,HasRoles;

    //   protected $guard_name = 'web';
    //  protected $guard = 'admin';
    protected $guard_name = 'api';


    protected $fillable = [
        'username', 'email', 'password','is_super'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
