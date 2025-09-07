<?php

namespace Database\Factories;

use App\Models\ScheduleType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScheduleType>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'schedule_type_id' => ScheduleType::factory(),
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->text(50),
            'is_active' => $this->faker->boolean(75)
        ];
    }
}
