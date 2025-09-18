<?php

namespace App\Livewire\Schedule;

use App\Models\Schedule;
use App\Models\ScheduleType;
use App\Models\ScheduleDetail;
use App\Models\ScheduleDetailCheck;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ScheduleCreate extends Component
{
    public $state = [
        'name' => null,
        'description' => null,
        'monday' => true,
        'tuesday' => true,
        'wednesday' => true,
        'thursday' => true,
        'friday' => true,
        'saturday' => false,
        'sunday' => false,
        'schedules' => []
    ];

    public $newSchedule = [
        'name' => null,
        'description' => null,
        'monday' => [],
        'tuesday' => [],
        'wednesday' => [],
        'thursday' => [],
        'friday' => [],
        'saturday' => [],
        'sunday' => [],
    ];

    public function mount()
    {
        /*
        $this->state = [
            'name' => 'test name',
            'description' => 'test description',
            'monday' => true,
            'tuesday' => true,
            'wednesday' => true,
            'thursday' => true,
            'friday' => true,
            'saturday' => false,
            'sunday' => false,
            'schedules' => [[
                'name' => 'Turno Mañana',
                'description' => 'descripción turno mañana',
                'monday' => [[
                    'check_time' => '08:00',
                    'check_type' => 'ENTRY'
                ], [
                    'check_time' => '17:00',
                    'check_type' => 'EXIT'
                ]],
                'tuesday' => [[
                    'check_time' => '08:00',
                    'check_type' => 'ENTRY'
                ], [
                    'check_time' => '17:00',
                    'check_type' => 'EXIT'
                ]],
                'wednesday' => [[
                    'check_time' => '08:00',
                    'check_type' => 'ENTRY'
                ], [
                    'check_time' => '17:00',
                    'check_type' => 'EXIT'
                ]],
                'thursday' => [[
                    'check_time' => '08:00',
                    'check_type' => 'ENTRY'
                ], [
                    'check_time' => '17:00',
                    'check_type' => 'EXIT'
                ]],
                'friday' => [[
                    'check_time' => '08:00',
                    'check_type' => 'ENTRY'
                ], [
                    'check_time' => '17:00',
                    'check_type' => 'EXIT'
                ]],
            ], [
                'name' => 'Turno Tarde',
                'description' => 'descripción turno tarde',
                'monday' => [[
                    'check_time' => '14:00',
                    'check_type' => 'ENTRY'
                ], [
                    'check_time' => '20:00',
                    'check_type' => 'EXIT'
                ]],
                'tuesday' => [[
                    'check_time' => '14:00',
                    'check_type' => 'ENTRY'
                ], [
                    'check_time' => '20:00',
                    'check_type' => 'EXIT'
                ]],
                'wednesday' => [[
                    'check_time' => '14:00',
                    'check_type' => 'ENTRY'
                ], [
                    'check_time' => '20:00',
                    'check_type' => 'EXIT'
                ]],
                'thursday' => [[
                    'check_time' => '14:00',
                    'check_type' => 'ENTRY'
                ], [
                    'check_time' => '20:00',
                    'check_type' => 'EXIT'
                ]],
                'friday' => [[
                    'check_time' => '14:00',
                    'check_type' => 'ENTRY'
                ], [
                    'check_time' => '20:00',
                    'check_type' => 'EXIT'
                ]],
            ]]
        ];
        */
    }

    public function render()
    {
        return view('livewire.schedule.schedule-create');
    }

    public function addEntry($schedule) {}

    public function getColspan()
    {
        $count = array_sum(array_intersect_key($this->state, array_flip([
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday',
            'saturday',
            'sunday'
        ])));

        return $count + 2;
    }

    public function store()
    {
        try {
            DB::beginTransaction();

            $scheduleType = ScheduleType::create([
                'name' => $this->state['name'],
                'description' =>  $this->state['description'],
                'monday' =>  $this->state['monday'],
                'tuesday' =>  $this->state['tuesday'],
                'wednesday' =>  $this->state['wednesday'],
                'thursday' =>  $this->state['thursday'],
                'friday' =>  $this->state['friday'],
                'saturday' =>  $this->state['saturday'],
                'sunday' =>  $this->state['sunday'],
                'is_active' =>  true,
            ]);

            foreach ($this->state['schedules'] as $schedule) {
                $scheduleEntity = Schedule::create([
                    'schedule_type_id' => $scheduleType->id,
                    'name' => $schedule['name'],
                    'description' => $schedule['description'],
                    'is_active' => true
                ]);

                $days = ['MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY', 'SUNDAY'];
                foreach ($days as $day) {
                    $dayLower = strtolower($day);
                    if (array_key_exists($dayLower, $schedule) && count($schedule[$dayLower])) {
                        $scheduleDetail = ScheduleDetail::create([
                            'schedule_id' => $scheduleEntity->id,
                            'day' => $day,
                        ]);

                        foreach ($schedule[$dayLower] as $scheduleDetailCheck) {
                            ScheduleDetailCheck::create([
                                'schedule_detail_id' => $scheduleDetail->id,
                                'check_time' => $scheduleDetailCheck['check_time'],
                                'check_type' => $scheduleDetailCheck['check_type'],
                            ]);
                        }
                    }
                }
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            logger($th->getMessage());
        }
    }

    public function addScheduleDetailCheck($day, $checkType)
    {
        $scheduleDetailCheck = [
            'check_time' => '00:00',
            'check_type' => $checkType
        ];

        $this->newSchedule[$day][] = $scheduleDetailCheck;
    }
}
