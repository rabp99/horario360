<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceCheck extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendance_id',
        'check_time_expected',
        'check_time_actual',
        'check_type',
    ];

    public function attedance()
    {
        return $this->belongsTo(Attendance::class);
    }
}
