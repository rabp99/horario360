<?php

namespace Database\Factories;

use App\Models\EducationLevelDetail;
use App\Models\LocationCode;
use App\Models\Occupation;
use App\Models\Specialty;
use App\Models\University;
use App\Models\WorkingCondition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class WorkingConditionDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'working_condition_id' => WorkingCondition::factory(),
            'name' => $this->faker->word(),
            'is_active' => $this->faker->boolean()
        ];
    }
}
