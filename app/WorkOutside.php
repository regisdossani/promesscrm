<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOutside extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id',
        'work_date',
        'document',
        'description',
    ];

    protected $dates = ['work_date'];




    public function setWorkDateAttribute($value)
    {
        $this->attributes['work_date'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    public function scopeWhereEmployee($query, $employee)
    {
        if($employee){
            return $query->where('employee_id', $employee);
        }

        return $query;
    }

    public function scopeWhereWorkDate($query, $work_date)
    {
        if(strlen($work_date)){
            return $query->whereDate('work_date', Carbon::createFromFormat('d/m/Y', $leave_date)->format('Y-m-d'));
        }

        return $query;
    }



    public function employee()
    {
        return $this->belongsTo('App\Equipe', 'employee_id');
    }
}
