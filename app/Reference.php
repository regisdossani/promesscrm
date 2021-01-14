<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable = [
        'format', 'categorie', 'formateur_id','matiere','reference'
    ];
    public function formateur(){
        return $this->belongsTo(Formateur::class,'formateur_id');
    }
}
