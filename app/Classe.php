<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'name',
        'class_numeric',
        //'formateur_id',
        'formation_id',
        'class_description'
    ];

    public function apprenants()
    {
        return $this->hasMany(Apprenant::class,'class_id');
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }

    public function formateur()
    {
        return $this->belongsToMany(Formateur::class);
    }

    public function formation() {
        return $this->belongsTo(Formation::class);
    }
}
