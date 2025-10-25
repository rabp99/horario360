<?php

namespace Database\Factories;

use App\Models\PensionScheme;
use Illuminate\Database\Eloquent\Factories\Factory;

class PensionSchemeFactory extends Factory
{
    protected $model = PensionScheme::class;

    public function definition(): array
    {
        $afpNames = [
            'AFP Integra',
            'AFP Prima',
            'AFP Profuturo',
            'AFP Habitat',
            'ONP',
        ];

        return [
            'name' => fake()->randomElement($afpNames),
            'is_active' => fake()->boolean(80), 
        ];
    }
}