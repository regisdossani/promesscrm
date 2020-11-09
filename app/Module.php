<?php

namespace App;
use App\Formateur;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'nom',
        'module_code',
        'formateur_id',
        'description'
    ];

    public function formateur()
    {
        return $this->belongsTo(Formateur::class);
    }
}
