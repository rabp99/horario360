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
            'state' => $this->faker->city(),
            'province' => $this->faker->city(),
            'district' => $this->faker->city(),
        ];
    }
}
