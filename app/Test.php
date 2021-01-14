<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'provenance','tel','email','etat','valeur','description',
    ];
    public function formateur(){
        return $this->belongsTo(Formateur::class,'formateur_id');
    }
}
