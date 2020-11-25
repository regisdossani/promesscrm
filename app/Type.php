<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function Generation()
    {
      return $this->hasMany('App\Generation');
    }
}
