<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class SchedulingPeriod extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'month',
        'state'
    ];

    public function getMonthNameAttribute()
    {
        $monthName = Carbon::createFromFormat('m', $this->month)->locale('es')->monthName;
        return ucfirst($monthName);
    }

    public function schedulingPeriodsAreas()
    {
        return $this->hasMany(SchedulingPeriodsArea::class)
            ->join('areas', 'areas.id', '=', 'scheduling_periods_areas.area_id')
            ->orderBy('areas.name')
            ->select('scheduling_periods_areas.*');
    }
}
