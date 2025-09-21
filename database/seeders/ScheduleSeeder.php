<?php

namespace Database\Seeders;

use App\Models\ScheduleType;
use App\Models\Schedule;
use App\Models\ScheduleDetail;
use App\Models\ScheduleDetailCheck;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ScheduleType::factory()
            ->count(30)
            ->create()
            ->each(function ($scheduleType) {
                Schedule::factory()
                    ->count(rand(1, 3))
                    ->create([
                        'schedule_type_id' => $scheduleType->id
                    ])
                    ->each(function ($schedule) use ($scheduleType) {
                        $days = [
                            'monday' => 'MONDAY',
                            'tuesday' => 'TUESDAY',
                            'wednesday' => 'WEDNESDAY',
                            'thursday' => 'THURSDAY',
                            'friday' => 'FRIDAY',
                            'saturday' => 'SATURDAY',
                            'sunday' => 'SUNDAY'
                        ];

                        foreach ($days as $propertyName => $dayName) {
                            if ($scheduleType->$propertyName) {
                                $scheduleDetail = ScheduleDetail::create([
                                    'schedule_id' => $schedule->id,
                                    'day' => $dayName
                                ]);

                                ScheduleDetailCheck::create([
                                    'schedule_detail_id' => $scheduleDetail->id,
                                    'check_time' => '08:00',
                                    'check_type' => 'ENTRY',
                                    'same_day' => true,
                                ]);

                                ScheduleDetailCheck::create([
                                    'schedule_detail_id' => $scheduleDetail->id,
                                    'check_time' => '17:00',
                                    'check_type' => 'EXIT',
                                    'same_day' => true,
                                ]);
                            }
                        }
                    });
            });
    }
}
