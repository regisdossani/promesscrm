<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'name',
        'class_numeric',
        'formateur_id','formation_id',
        'class_description','apprenant_id','module_id'

    ];

    public function apprenants()
    {
        return $this->hasMany(Apprenant::class,'apprenant_id');
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class,'module_id');
    }

    public function formateurs()
    {
        return $this->belongsToMany(Formateur::class,'formateur_id');
    }
    public function formation()
    {
        return $this->belongTo(Formation::class,'formation_id');
    }

}
