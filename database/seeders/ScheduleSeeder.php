<?php

namespace Database\Seeders;

use App\Models\ScheduleType;
use App\Models\Schedule;
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
                    ]);
            });
    }
}
