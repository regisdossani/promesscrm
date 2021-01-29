<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $fillable=['nom','reference','formateur_id',
                            'module_id','coef'];

    public function module(){
        return $this->belongsTo(Module::class);
    }
    public function formateur(){
        return $this->belongsTo(Module::class);
    }

}
