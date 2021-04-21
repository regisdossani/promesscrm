<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = ['apprenant_id', 'module_id',
     'class_id', 'note_exam','matiere_id','filiere_id' ,'note1', 'note2', 'year'];

     public function classe()
    {
        return $this->belongsTo(Classe::class,'class_id');
    }
    public function module()
    {
        return $this->belongsTo(Module::class,'module_id');
    }

     public function filiere()
    {
        return $this->belongsTo(Filiere::class,'filiere_id');
    }

    public function apprenant()
    {
        return $this->belongsTo(Apprenant::class,'apprenant_id');
    }

    public function matiere()
    {
        return $this->belongsTo(Nosmatieres::class,'matiere_id');
    }


}
