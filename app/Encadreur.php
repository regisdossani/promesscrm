<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encadreur extends Model
{
    protected $table = 'encadreurs';

    protected $fillable = [
        'formateur_id','noms'
    ];

    public $timestamps = true;

    
    public function formateur()
    {
        return $this->belongsTo(Formateur::class,'formateur_id');
    }
}
