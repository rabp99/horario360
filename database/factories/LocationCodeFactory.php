<?php

namespace Database\Factories;

use App\Models\LocationCode;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationCodeFactory extends Factory
{
    protected $model = LocationCode::class;

    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->numerify('######'),
            'name' => $this->faker->city(),
            'type' => $this->faker->randomElement(['DEPARTAMENTO', 'PROVINCIA', 'DISTRITO']),
            'parent_id' => null
        ];
    }
}
