<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Apprenant;
use App\Stage;

class Stagiaire extends Model
{
    protected $table = 'stagiaires';
	public $timestamps = true;
	protected $fillable = array('stage_id','appreciation', 'apprenant_id','moyenne');

	public function stage()
	{
		return $this->belongsTo(Stage::class);
	}

	public function apprenant()
	{
		return $this->belongsTo(Apprenant::class);
	}
}
