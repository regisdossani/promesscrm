<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
   protected $table='entreprises';
   
   protected $fillable=['raison_sociale','responsable','reference','activite_entreprise',
   'contact_tel','contact_email'
  ];
}
