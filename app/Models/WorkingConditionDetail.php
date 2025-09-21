<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkingConditionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'working_condition_id',
        'name',
        'is_active'
    ];

    public function workingCondition()
    {
        return $this->belongsTo(WorkingCondition::class);
    }
}
