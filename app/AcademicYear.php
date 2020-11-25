<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    use SoftDeletes;
    protected  $dates = ['start_date', 'end_date'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','start_date', 'end_date', 'status'];

}
