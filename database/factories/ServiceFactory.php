<?php

namespace Database\Factories;

use App\Models\EducationLevelDetail;
use App\Models\LocationCode;
use App\Models\Occupation;
use App\Models\Specialty;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'is_active' => $this->faker->boolean()
        ];
    }
}
