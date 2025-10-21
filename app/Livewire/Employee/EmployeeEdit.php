<?php

namespace App\Livewire\Employee;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Area;
use App\Models\EducationLevel;
use App\Models\EducationLevelDetail;
use App\Models\Occupation;
use App\Models\Specialty;
use App\Models\University;
use App\Models\Employee;
use App\Models\LocationCode;
use App\Models\ScheduleType;
use App\Models\Schedule;

class EmployeeEdit extends Component
{
    public $employee;
    public $employeeId;
    
    public $areas;
    public $educationLevels;
    public $educationLevelDetails = [];
    public $occupations;
    public $specialties;
    public $universities;
    public $documentTypes;
    public $genders;
    public $maritalStatuses;
    public $schedulingTypes;
    public $scheduleTypes;
    public $has_disability = false;
    public $searchDistrict = '';
    public $districtResults = [];
    public $selectedEducationLevel;
    public $schedules = [];
    public $selectedSchedule;

    public function mount($employeeId)
    {
        $this->employeeId = $employeeId;
        $this->employee = Employee::findOrFail($employeeId)->toArray();
        
        // data inicial
        $this->areas = Area::all();
        $this->educationLevels = EducationLevel::all();
        $this->occupations = Occupation::all();
        $this->specialties = Specialty::all();
        $this->universities = University::all();
        $this->scheduleTypes = ScheduleType::where('is_active', true)->get();
        $this->documentTypes = Employee::DOCUMENT_TYPES;
        $this->genders = Employee::GENDERS;
        $this->maritalStatuses = Employee::MARITAL_STATUSES;
        $this->schedulingTypes = Employee::SCHEDULING_TYPES;

        $this->selectedEducationLevel = optional(EducationLevelDetail::find($this->employee['education_level_detail_id']))->education_level_id;
        $this->selectedSchedule = $this->employee['schedule_id'];
                
        if ($this->selectedEducationLevel) {
            $this->educationLevelDetails = EducationLevelDetail::where('education_level_id', $this->selectedEducationLevel)->get();
        }
        
        if ($this->employee['schedule_type_id']) {
            $this->schedules = Schedule::where('schedule_type_id', $this->employee['schedule_type_id'])->get();
        }

        if ($this->employee['location_code_id']) {
            $location = LocationCode::find($this->employee['location_code_id']);
            if ($location) {
                $this->searchDistrict = "{$location->state}, {$location->province}, {$location->district}";
            }
        }
    }

    public function render()
    {
        return view('livewire.employee.employee-edit');
    }

    public function updatedSelectedEducationLevel()
    {
        $this->educationLevelDetails = [];
        if (strlen($this->selectedEducationLevel) > 0) {
            $this->educationLevelDetails = EducationLevelDetail::query()
                ->where('education_level_id', $this->selectedEducationLevel)
                ->get();
        }
    }

    public function updatedSearchDistrict()
    {
        if (strlen($this->searchDistrict) > 0) {
            $this->districtResults = LocationCode::query()
                ->where('district', 'like', '%' . $this->searchDistrict . '%')
                ->orWhere('province', 'like', '%' . $this->searchDistrict . '%')
                ->orWhere('state', 'like', '%' . $this->searchDistrict . '%')
                ->limit(10)
                ->get();
        } else {
            $this->districtResults = [];
        }
    }

    public function updatedSelectedSchedule()
    {
        $this->employee['schedule_id'] = $this->selectedSchedule;
    }

    public function selectDistrict($id, $name)
    {
        $this->employee['location_code_id'] = $id;
        $this->searchDistrict = $name;
        $this->districtResults = [];
    }

    public function selectSchedulingType($type)
    {
        $this->employee['schedule_id'] = null;
        $this->employee['schedule_type_id'] = null;
        $this->schedules = [];
    }

    public function getSchedulesByType($type)
    {
        $this->schedules = [];
        $this->employee['schedule_id'] = null;
        $this->schedules = Schedule::where('schedule_type_id', $type)->get();
    }

    public function update()
    {
        try {
            DB::beginTransaction();
            
            $employee = Employee::findOrFail($this->employeeId);
            $employee->update([
                'first_name'        => $this->employee['first_name'],
                'last_name1'        => $this->employee['last_name1'],
                'last_name2'        => $this->employee['last_name2'],
                'email'             => $this->employee['email'],
                'document_type'     => $this->employee['document_type'],
                'document_number'   => $this->employee['document_number'],
                'ruc'               => $this->employee['ruc'],
                'gender'            => $this->employee['gender'],
                'marital_status'    => $this->employee['marital_status'],
                'birth_date'        => $this->employee['birth_date'],
                'has_disability'    => $this->employee['has_disability'] ? true : false,
                'location_code_id'  => $this->employee['location_code_id'],
                'address'           => $this->employee['address'],
                'address_reference' => $this->employee['address_reference'],
                'phone'             => $this->employee['phone'],
                'cell_phone'        => $this->employee['cell_phone'],
                'scheduling_type'   => $this->employee['scheduling_type'],
                'schedule_type_id'  => $this->employee['schedule_type_id'],
                'schedule_id'       => $this->employee['schedule_id'],
                'education_level_detail_id' => $this->employee['education_level_detail_id'],
                'occupation_id'     => $this->employee['occupation_id'],
                'tuition_code'      => $this->employee['tuition_code'],
                'specialty_id'      => $this->employee['specialty_id'],
                'specialty_number'  => $this->employee['specialty_number'],
                'university_id'     => $this->employee['university_id'],
                'graduation_year'   => $this->employee['graduation_year'],
                'is_active'         => true,
            ]);

            DB::commit();

            redirect()->route('employee.employee-index')->with('success', 'El trabajador fue actualizado correctamente.');
        } catch (\Throwable $th) {
            DB::rollBack();
            logger($th->getMessage());
            session()->flash('error', 'El trabajador no fue actualizado correctamente.');
        }
    }
}