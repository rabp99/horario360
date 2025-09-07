<?php

namespace Database\Factories;

use App\Models\EducationLevel;
use App\Models\EducationLevelDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationLevelFactory extends Factory
{
    protected $model = EducationLevel::class;

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
            'is_active' => true
        ];
    }
}
