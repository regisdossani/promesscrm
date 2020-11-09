<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eqattendance extends Model
{
    protected $table = 'eqattendances';
    protected $fillable = [
        'employee_id',
        'attendance_date',
        'in_time',
        'out_time',
        'working_hour',
        'status',
        'present'
    ];

    protected $dates = ['attendance_date','in_time','out_time'];


    public function employee()
    {
        return $this->belongsTo('App\Equipe', 'employee_id');
    }

    public function setAttendanceDateAttribute($value)
    {
        $this->attributes['attendance_date'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    public function getAttendanceDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }


    public function getPresentAttribute($value)
    {
        return Arr::get(AppHelper::ATTENDANCE_TYPE, $value);
    }

    public function scopeEmployee($query, $employee)
    {
        if($employee){
            return $query->where('employee_id', $employee);
        }

        return $query;
    }

    public function scopeCountOrGet($query, $isCount)
    {
        if($isCount){
            return $query->count();
        }

        return $query->get();
    }


}
