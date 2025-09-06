<?php

namespace Database\Factories;

use App\Models\EducationLevelDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationLevelDetailFactory extends Factory
{
    protected $model = EducationLevelDetail::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Primaria Completa',
                'Secundaria Completa',
                'Superior Técnica Completa',
                'Superior Universitaria Completa',
                'Maestría',
                'Doctorado'
            ]),
            'description' => $this->faker->sentence(),
            'is_active' => true
        ];
    }
}
