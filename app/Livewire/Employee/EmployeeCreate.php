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
        'cell_phone'        => null
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
    public $has_disability = false;     

    public $searchDistrict = '';
    public $districtResults = [];    

    public $selectedEducationLevel = '';
    public $scheduleAssignType = false;
    
     
    public function mount()
    {
        $this->areas = Area::all();        
        $this->educationLevels = EducationLevel::all();        
        $this->occupations = Occupation::all();
        $this->specialties = Specialty::all();
        $this->universities = University::all();
        $this->documentTypes = Employee::DOCUMENT_TYPES;
        $this->genders = Employee::GENDERS;
        $this->maritalStatuses = Employee::MARITAL_STATUSES;
        $this->schedulingTypes = Employee::SCHEDULING_TYPES;
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

    public function selectDistrict($id, $name)
    {
        $this->newEmployee['location_code_id'] = $id;
        $this->searchDistrict = $name;
        $this->districtResults = []; 
    }

    public function selectSchedulingType($type)
    {       
        Log::info('selectSchedulingType:', [
            'valor' => $type
        ]);                
    }

    public function store()
    {
        try {
            DB::beginTransaction();

            Log::info('store1', [
                'DATA' => $this->newEmployee
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
