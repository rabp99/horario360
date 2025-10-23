<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Holiday extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'holiday_date',
        'description',
        'is_past_date',
        'user_creator_id',
        'user_modifier_id'
    ];

    protected $casts = [
        'holiday_date' => 'date'
    ];
}
