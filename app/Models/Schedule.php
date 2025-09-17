<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule_type_id',
        'name',
        'description',
        'is_active'
    ];

    public function scheduleDetails()
    {
        return $this->hasMany(ScheduleDetail::class);
    }

    public function getDetailChecks($day)
    {
        foreach ($this->scheduleDetails as $scheduleDetail) {
            if ($scheduleDetail->day === $day) {
                $currentScheduleDetail = $scheduleDetail;
                break;
            }
        }

        return $currentScheduleDetail->scheduleDetailChecks ?? [];
    }
}
