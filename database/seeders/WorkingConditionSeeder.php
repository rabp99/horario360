<?php

namespace Database\Seeders;

use App\Models\ScheduleType;
use App\Models\Schedule;
use App\Models\ScheduleDetail;
use App\Models\ScheduleDetailCheck;
use App\Models\WorkingCondition;
use App\Models\WorkingConditionDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkingConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkingCondition::factory()
            ->count(30)
            ->create()
            ->each(function ($workingCondition) {
                WorkingConditionDetail::factory()
                    ->count(5)
                    ->create([
                        'working_condition_id' => $workingCondition->id
                    ]);
            });
    }
}
