<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeEmploymentHistory extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employee_employment_histories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'employee_id', // trabajador
        'position_id', // cargo
        'working_condition_detail_id', // ce carga los working-condition y se elige el detail que es la modalidad
        'area_id', //denomniacion organica
        'pension_scheme_id', // relacion con tabla pension scheme
        'level', //nivel
        'start', //fecha ingreso
        'end', // fecha cese
        'is_active',
        'salary', //sueldo
        'start_pension_scheme', //inicio regimen pensionario
        'pension_4th', // tiene suspension
        'sctr' //sctr        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start' => 'date',
        'end' => 'date',
        'start_pension_scheme' => 'date',
        'is_active' => 'boolean',
        'pension_4th' => 'boolean',
        'sctr' => 'boolean',
        'salary' => 'decimal:2',
    ];

    /**
     * Get the employee that owns the employment history.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * Get the position associated with the employment history.
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    /**
     * Get the working condition detail associated with the employment history.
     */
    public function workingConditionDetail(): BelongsTo
    {
        return $this->belongsTo(WorkingConditionDetail::class);
    }

    /**
     * Get the area associated with the employment history.
     */
    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }

    /**
     * Get the area associated with the employment history.
     */
    public function pensionScheme(): BelongsTo
    {
        return $this->belongsTo(PensionScheme::class);
    }

    /**
     * Scope a query to only include active employment histories.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include inactive employment histories.
     */
    public function scopeInactive($query)
    {
        return $query->where('is_active', false);
    }

    /**
     * Scope a query to filter by employee.
     */
    public function scopeForEmployee($query, $employeeId)
    {
        return $query->where('employee_id', $employeeId);
    }

    /**
     * Scope a query to filter by pension scheme.
     */
    public function scopeForPensionScheme($query, $pensionSchemeId)
    {
        return $query->where('pension_scheme_id', $pensionSchemeId);
    }

    /**
     * Check if the employment history is currently active.
     */
    public function isCurrentlyActive(): bool
    {
        return $this->is_active && (is_null($this->end) || $this->end->isFuture());
    }

    /**
     * Get the duration of employment in days.
     */
    public function getDurationInDays(): int
    {
        $endDate = $this->end ?? now();
        return $this->start->diffInDays($endDate);
    }

    /**
     * Get the duration of employment in a human-readable format.
     */
    public function getDurationAttribute(): string
    {
        $endDate = $this->end ?? now();
        return $this->start->diffForHumans($endDate, true);
    }
}