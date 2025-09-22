<?php

namespace Database\Seeders;

use App\Models\SchedulingPeriod;
use App\Models\SchedulingPeriodsArea;
use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SchedulingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $periods = $this->getLastPeriods(30);

        $areas = Area::all();

        foreach ($periods as $period) {
            $schedulingPeriod = SchedulingPeriod::create([
                'year' => $period['year'],
                'month' => $period['month'],
                'state' => 'ACTIVO'
            ]);

            foreach ($areas as $area) {
                SchedulingPeriodsArea::factory()->create([
                    'scheduling_period_id' => $schedulingPeriod->id,
                    'area_id' => $area->id,
                ]);
            }
        }
    }

    private function getLastPeriods($periodsCount)
    {
        $periods = [];

        // Periodo actual
        $now = Carbon::now()->startOfMonth();

        // 30 meses hacia atrás (incluyendo el actual)
        $start = $now->copy()->subMonths($periodsCount - 1);

        for ($date = $start->copy(); $date <= $now; $date->addMonth()) {
            $periods[] = [
                'year' => $date->year,
                'month' => str_pad($date->month, 2, '0', STR_PAD_LEFT),
            ];
        }

        return $periods;
    }
}
