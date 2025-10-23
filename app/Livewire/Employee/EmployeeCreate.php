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
use App\Models\EmployeeEmploymentHistory;
use App\Models\WorkingCondition;
use App\Models\WorkingConditionDetail;
use App\Models\Position;
use App\Models\PensionScheme;

class EmployeeCreate extends Component
{
    public $newEmployee = [
        'first_name'        => null,
        'last_name1'        => null,
        'last_name2'        => null,
        'email'             => null,
        'document_type'     => null,
        'document_number'   => null,
        'ruc'               => null,
        'gender'            => null,
        'marital_status'    => null,
        'birth_date'        => null,
        'has_disability'    => null,
        'location_code_id'  => null,
        'address'           => null,
        'address_reference' => null,
        'phone'             => null,
        'cell_phone'        => null,
        'scheduling_type'   => null,
        'schedule_type_id'  => null,
        'schedule_id'       => null,
        'education_level_detail_id' => null,
        'occupation_id' => null,
        'tuition_code' => null,
        'specialty_id' => null,
        'specialty_number' => null,
        'university_id' => null,
        'graduation_year' => null,
    ];

    public $newEmploymentHistory = [
        'employee_id' => null,
        'position_id' => null,
        'working_condition_detail_id' => null,
        'area_id' => null,
        'pension_scheme_id' => null,
        'level' => null,
        'start' => null,
        'end' => null,
        'is_active' => null,
        'salary' => null,
        'start_pension_scheme' => null,
        'pension_4th' => null,
        'sctr' => null
    ];

    public $hasEmploymentHistory = false;
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

    public $selectedEducationLevel = '';
    public $scheduleAssignType = false;

    public $schedules = [];
    public $selectedSchedule;

    public $workingConditions;
    public $workingConditionDetails = [];
    public $positions;
    public $pensionSchemes;
    public $selectedWorkingCondition = '';
            
    public function mount()
    {
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
        $this->workingConditions = WorkingCondition::where('is_active', true)->get();
        $this->positions = Position::where('is_active', true)->get();
        $this->pensionSchemes = PensionScheme::where('is_active', true)->get();
    }

    public function render()
    {
        return view('livewire.employee.employee-create');
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

    public function updatedSelectedWorkingCondition()
    {
        Log::info('selectedWorkingCondition:', [
                'valor' => $this->selectedWorkingCondition
            ]); 
        $this->workingConditionDetails = [];
        if (strlen($this->selectedWorkingCondition) > 0) {
            $this->workingConditionDetails = WorkingConditionDetail::query()
                ->where('working_condition_id', $this->selectedWorkingCondition)
                ->where('is_active', true)
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
        $this->newEmployee['schedule_id'] = $this->selectedSchedule;
    }

    public function selectDistrict($id, $name)
    {
        $this->newEmployee['location_code_id'] = $id;
        $this->searchDistrict = $name;
        $this->districtResults = [];
    }

    public function selectSchedulingType($type)
    {            
        $this->schedules = [];   
        $this->newEmployee['schedule_id'] = null;
        $this->newEmployee['schedule_type_id'] = null;
    }

    public function getSchedulesByType($type)
    {
        $this->schedules = [];
        $this->newEmployee['schedule_id'] = null;
        $this->schedules = Schedule::where('schedule_type_id', $type)->get();
    }

    public function store()
    {
        try {
            /* Log::info('store:', [
                'valor' => $type
            ]);  */

            DB::beginTransaction();
            $employee = Employee::create([
                'first_name'        => $this->newEmployee['first_name'],
                'last_name1'        => $this->newEmployee['last_name1'],
                'last_name2'        => $this->newEmployee['last_name2'],
                'email'             => $this->newEmployee['email'],
                'document_type'     => $this->newEmployee['document_type'],
                'document_number'   => $this->newEmployee['document_number'],
                'ruc'               => $this->newEmployee['ruc'],
                'gender'            => $this->newEmployee['gender'],
                'marital_status'    => $this->newEmployee['marital_status'],
                'birth_date'        => $this->newEmployee['birth_date'],
                'has_disability'    => $this->newEmployee['has_disability'] ? true : false,
                'location_code_id'  => $this->newEmployee['location_code_id'],
                'address'           => $this->newEmployee['address'],
                'address_reference' => $this->newEmployee['address_reference'],
                'phone'             => $this->newEmployee['phone'],
                'cell_phone'        => $this->newEmployee['cell_phone'],
                'scheduling_type'   => $this->newEmployee['scheduling_type'], // fixed custom
                'schedule_type_id'  => $this->newEmployee['schedule_type_id'],
                'schedule_id'       => $this->newEmployee['schedule_id'],
                'education_level_detail_id' => $this->newEmployee['education_level_detail_id'],
                'occupation_id' => $this->newEmployee['occupation_id'],
                'tuition_code' => $this->newEmployee['tuition_code'],
                'specialty_id' => $this->newEmployee['specialty_id'],
                'specialty_number' => $this->newEmployee['specialty_number'],
                'university_id' => $this->newEmployee['university_id'],
                'graduation_year' => $this->newEmployee['graduation_year'],
                'is_active' => true,
            ]);

            EmployeeEmploymentHistory::create([
                'employee_id' => $employee->id,
                'position_id' => $this->newEmploymentHistory['position_id'],
                'working_condition_detail_id' => $this->newEmploymentHistory['working_condition_detail_id'],
                'area_id' => $this->newEmploymentHistory['area_id'],
                'pension_scheme_id' => $this->newEmploymentHistory['pension_scheme_id'],
                'level' => $this->newEmploymentHistory['level'],
                'start' => $this->newEmploymentHistory['start'],
                'end' => $this->newEmploymentHistory['end'],
                'is_active' => true,
                'salary' => $this->newEmploymentHistory['salary'],
                'start_pension_scheme' => $this->newEmploymentHistory['start_pension_scheme'],
                'pension_4th' => $this->newEmploymentHistory['pension_4th'] ? true : false,
                'sctr' => $this->newEmploymentHistory['sctr'] ? true : false
            ]);

            DB::commit();

            redirect()->route('employee.employee-index')->with('success', 'El trabajador fue registrado correctamente.');
        } catch (\Throwable $th) {
            DB::rollBack();
            logger($th->getMessage());
            session()->flash('error', 'El trabajador no fue registrado correctamente.');
        }
    }
}
