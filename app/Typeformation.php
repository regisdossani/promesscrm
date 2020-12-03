<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeformation extends Model
{
    protected $fillable = [
        'nom',
    ];
    public function formations()
    {
            return $this->hasMany('App\Formation', 'type_id', 'id');
    }
}
