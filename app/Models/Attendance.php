<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'scheduling_id',
        'schedule_id',
        'service_id',
        'occurrence_id',
        'attendance_date',
        'state',
        'delay_time',
    ];

    protected $casts = [
        'attendance_date' => 'date'
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

    public function occurrence()
    {
        return $this->belongsTo(Occurrence::class);
    }
}
