<?php

namespace Database\Factories;

use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

class UniversityFactory extends Factory
{
    protected $model = University::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company() . ' University',
            'short_name' => $this->faker->lexify('???'),
            'description' => $this->faker->sentence(),
            'is_active' => true
        ];
    }
}
