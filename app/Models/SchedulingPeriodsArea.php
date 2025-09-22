<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SchedulingPeriodsArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'scheduling_period_id',
        'area_id',
        'expected_scheduled_employee_count',
        'actual_scheduled_employee_count',
        'state',
    ];

    public function schedulingPeriod()
    {
        return $this->belongsTo(SchedulingPeriod::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
