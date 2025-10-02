<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'scheduling_id',
        'schedule_id',
        'service_id',
        'attendance_date',
        'state',
    ];

    public function scheduling()
    {
        return $this->belongsTo(Scheduling::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
