<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encadreur extends Model
{
    protected $table = 'encadreurs';

    protected $fillable = [
        'professionnel_id',
        'formateur_id'
    ];

    public $timestamps = true;

    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class,'professionnel_id');
    }
    public function formateur()
    {
        return $this->belongsTo(Formateur::class,'formateur_id');
    }
}
