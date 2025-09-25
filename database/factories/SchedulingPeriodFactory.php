<?php

namespace Database\Factories;

use App\Models\EducationLevelDetail;
use App\Models\LocationCode;
use App\Models\Occupation;
use App\Models\Specialty;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SchedulingPeriod>
 */
class SchedulingPeriodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'year' => $this->faker->year(),
            'month' => str_pad($this->faker->numberBetween(1, 12), 2, '0', STR_PAD_LEFT),
            'state' => $this->faker->randomElement(['ACTIVO', 'CERRADO'])
        ];
    }
}
