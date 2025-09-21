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

    public $newScheduleDetailCheck = [
        'check_time' => null,
        'check_type' => null,
        'same_day' => true,
    ];

    public $scheduleDetailCheckTypes = [
        'ENTRY' => 'ENTRADA',
        'EXIT' => 'SALIDA'
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
                                'same_day' => $scheduleDetailCheck['same_day'],
                            ]);
                        }
                    }
                }
            }

            DB::commit();

            redirect()->route('schedule.schedule-index')->with('success', 'El horario fue registrado correctamente.');
        } catch (\Throwable $th) {
            DB::rollBack();
            logger($th->getMessage());
            session()->flash('error', 'El horario no fue registrado correctamente.');
        }
    }

    public function addScheduleDetailCheck($day)
    {
        $scheduleDetailCheck = [
            'check_type' => $this->newScheduleDetailCheck['check_type'],
            'check_time' => $this->newScheduleDetailCheck['check_time'],
            'same_day' => $this->newScheduleDetailCheck['same_day'],
        ];

        $this->newSchedule[$day][] = $scheduleDetailCheck;

        $this->newScheduleDetailCheck['check_type'] = null;
        $this->newScheduleDetailCheck['check_time'] = null;
        $this->newScheduleDetailCheck['same_day'] = true;

        $this->dispatch('closeAddScheduleDetailCheckDrawer');
    }

    public function addSchedule()
    {
        $this->state['schedules'][] = $this->newSchedule;
        $this->dispatch('closeAddScheduleModal');
    }
}
