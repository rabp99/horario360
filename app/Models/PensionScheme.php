<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PensionScheme extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pension_schemes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',        
        'type', // AFP, ONP, etc.        
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get all employment histories using this pension scheme.
     */
    public function employmentHistories(): HasMany
    {
        return $this->hasMany(EmployeeEmploymentHistory::class);
    }

    /**
     * Scope a query to only include active pension schemes.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}