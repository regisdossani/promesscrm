<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'nom', 'annee', 'type'
    ];

    public function typeformation(){
        return $this->belongsTo(Typeformation::class,'type');
    }
}
