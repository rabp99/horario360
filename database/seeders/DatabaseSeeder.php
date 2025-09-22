<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EmployeeSeeder::class,
            ScheduleSeeder::class,
            UserSeeder::class,
            AreaSeeder::class,
            ServiceSeeder::class,
            PositionSeeder::class,
            WorkingConditionSeeder::class,
            SchedulingSeeder::class
        ]);
    }
}
