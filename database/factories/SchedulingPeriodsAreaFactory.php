<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\EducationLevelDetail;
use App\Models\LocationCode;
use App\Models\Occupation;
use App\Models\SchedulingPeriod;
use App\Models\Specialty;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SchedulingPeriodsArea>
 */
class SchedulingPeriodsAreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $expectedScheduledEmployeeCount = $this->faker->numberBetween(1, 30);
        $actualScheduledEmployeeCount = $this->faker->numberBetween(1, $expectedScheduledEmployeeCount);

        return [
            'scheduling_period_id' => SchedulingPeriod::factory(),
            'area_id' => Area::factory(),
            'expected_scheduled_employee_count' => $expectedScheduledEmployeeCount,
            'actual_scheduled_employee_count' => $actualScheduledEmployeeCount,
            'state' => $this->faker->randomElement([
                'SIN INICIAR',
                'POR PROGRAMAR',
                'PROGRAMADO',
                'APROBADO',
                'VERIFICADO'
            ]),
        ];
    }
}
