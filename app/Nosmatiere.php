<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nosmatiere extends Model
{
    protected $table='nosmatieres';
    protected $fillable = [
        'nom', 'reference', 'module_id','','formateur_id','coef'
    ];
    public function module(){
        return $this->belongsTo(Module::class);
    }
    public function formateur(){
        return $this->belongsTo(Formateur::class);
    }

}
