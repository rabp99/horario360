<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheduling extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'scheduling_periods_area_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function schedulingPeriodsArea()
    {
        return $this->belongsTo(SchedulingPeriodsArea::class);
    }
}
