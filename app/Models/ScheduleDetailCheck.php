<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleDetailCheck extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule_detail_id',
        'check_time',
        'check_type',
        'same_day',
    ];

    protected $casts = [
        'same_day' => 'boolean',
    ];
}
