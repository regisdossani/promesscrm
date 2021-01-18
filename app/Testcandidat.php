<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testcandidat extends Model
{
    protected $fillable = [
        'filiere', 'test_ecrit', 'entretien','test_pj','resultat','signature',
        'commentaire','candidat_id',
    ];
    public function candidat(){
        return $this->belongsTo(Candidat::class,'candidat_id');
    }
}
