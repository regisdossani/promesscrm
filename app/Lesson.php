<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    public $table = 'lessons';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'jour',
        'formateur_id',
        'module_id',
        'typecours',

        'end_time',
        'start_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const WEEK_DAYS = [
        '1' => 'Lundi',
        '2' => 'Mardi',
        '3' => 'Mercredi',
        '4' => 'Jeudi',
        '5' => 'Vendredi',
        '6' => 'Samedi',
        '7' => 'Dimanche',
    ];

    public function getDifferenceAttribute()
    {
        return Carbon::parse($this->end_time)->diffInMinutes($this->start_time);
    }

    public function getStartTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('H:i:s', $value)->format(config('panel.lesson_time_format')) : null;
    }

    public function setStartTimeAttribute($value)
    {
        $this->attributes['start_time'] = $value ? Carbon::createFromFormat(config('panel.lesson_time_format'),
            $value)->format('H:i:s') : null;
    }

    public function getEndTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('H:i:s', $value)->format(config('panel.lesson_time_format')) : null;
    }

    public function setEndTimeAttribute($value)
    {
        $this->attributes['end_time'] = $value ? Carbon::createFromFormat(config('panel.lesson_time_format'),
            $value)->format('H:i:s') : null;
    }

    function module()
    {
        return $this->belongsTo(modules::class, 'module_id');
    }

    public function formateur()
    {
        return $this->belongsTo(Formateur::class, 'formateur_id');
    }

    public static function isTimeAvailable($weekday, $startTime, $endTime, $module, $teacher, $lesson)
    {
        $lessons = self::where('jour', $weekday)
            ->when($lesson, function ($query) use ($lesson) {
                $query->where('id', '!=', $lesson);
            })
            ->where(function ($query) use ($class, $teacher) {
                $query->where('module_id', $class)
                    ->orWhere('teacher_id', $teacher);
            })
            ->where([
                ['start_time', '<', $endTime],
                ['end_time', '>', $startTime],
            ])
            ->count();

        return !$lessons;
    }

    public function scopeCalendarByRoleOrClassId($query)
    {
        return $query->when(!request()->input('module_id'), function ($query) {
            $query->when(auth()->user()->is_teacher, function ($query) {
                $query->where('teacher_id', auth()->user()->id);
            })
                ->when(auth()->user()->is_student, function ($query) {
                    $query->where('module_id', auth()->user()->class_id ?? '0');
                });
        })
            ->when(request()->input('module_id'), function ($query) {
                $query->where('module_id', request()->input('module_id'));
            });
    }
}
