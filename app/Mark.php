<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = ['apprenant_id', 'module_id', 'formation_id',
     'class_id', 'note_exam', 'note1', 'note2', 'year'];

     public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
    public function apprenant()
    {
        return $this->belongsTo(Apprenant::class);
    }
}
