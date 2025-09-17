<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule_id',
        'day',
    ];

    public function scheduleDetailChecks()
    {
        return $this->hasMany(ScheduleDetailCheck::class);
    }
}
