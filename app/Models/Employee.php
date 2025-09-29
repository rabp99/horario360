<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name1',
        'last_name2',
        'document_type',
        'document_number',
        'birth_date',
        'gender',
        'marital_status',
        'ruc',
        'has_disability',
        'profile_photo_path',
        'location_code_id',
        'address',
        'address_reference',
        'phone',
        'cell_phone',
        'email',
        'education_level_detail_id', // GRADO - renderizar nivel educativo  -  filtrar detail de acuerdo a eso y elegir deail para este campo q seria el grado
        'occupation_id', // profesion
        'tuition_code', // nro colegiatura
        'specialty_id', // especialidad
        'specialty_number', // numero especialidad
        'university_id', // universidad
        'graduation_year', // año de egreso
        'is_active',
        'scheduling_type',// FIXED - ELIGE TURNO / CUSTOM - NO ELIGE
        'schedule_type_id',// obligatorio
        'schedule_id' // 
    ];

    protected $casts = [
        'has_disability' => 'boolean',
        'graduation_year' => 'integer',
        'specialty_number' => 'integer',
        'birth_date' => 'date'
    ];

    const DOCUMENT_TYPES = ['DNI', 'CE'];
    const GENDERS = ['M', 'F'];
    const MARITAL_STATUSES = ['SOLTERO', 'CASAOO', 'VIUDO', 'DIVORCIADO'];
    const SCHEDULING_TYPES = ['FIXED', 'CUSTOM'];
    

    /**
     * Get the location code that owns the Employee
     */
    public function locationCode(): BelongsTo
    {
        return $this->belongsTo(LocationCode::class);
    }

    /**
     * Get the education level detail that owns the Employee
     */
    public function educationLevelDetail(): BelongsTo
    {
        return $this->belongsTo(EducationLevelDetail::class);
    }

    /**
     * Get the occupation that owns the Employee
     */
    public function occupation(): BelongsTo
    {
        return $this->belongsTo(Occupation::class);
    }

    /**
     * Get the specialty that owns the Employee
     */
    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class);
    }

    /**
     * Get the university that owns the Employee
     */
    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class);
    }

    /**
     * Get the schedule type that owns the Employee
     */
    public function scheduleType(): BelongsTo
    {
        return $this->belongsTo(ScheduleType::class);
    }

    /**
     * Get the schedule that owns the Employee
     */
    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    /**
     * Get the employee's full name
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->last_name1} {$this->last_name2}, {$this->names}";
    }

    public function schedulings()
    {
        return $this->hasMany(Scheduling::class);
    }
}
