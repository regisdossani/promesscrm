<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nosmatiere extends Model
{
    protected $table='nosmatieres';
    protected $fillable = [
        'nom', 'reference', 'module_id','classe_id','formateur_id','coef'
    ];

    public function module(){
        return $this->belongsTo(Module::class,'module_id');
    }

    public function formateur(){
        return $this->belongsTo(Formateur::class,'formateur_id');
    }

    public function classe(){
        return $this->belongsTo(Classe::class,'classe_id');
    }
    
 public function notes(){
        return $this->hasMany(Mark::class,'matiere_id');
    }
}
