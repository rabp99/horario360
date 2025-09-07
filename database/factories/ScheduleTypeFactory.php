<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScheduleType>
 */
class ScheduleTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->text(50),
            'is_active' => $this->faker->boolean(75),
            'monday' => true,
            'tuesday' => true,
            'wednesday' => true,
            'thursday' => true,
            'friday' => true,
            'saturday' => $this->faker->boolean(50),
            'sunday' => $this->faker->boolean(10),
        ];
    }
}
