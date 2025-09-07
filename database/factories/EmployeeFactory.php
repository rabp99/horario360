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
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['M', 'F']);

        return [
            'first_name' => $this->faker->firstName($gender === 'M' ? 'male' : 'female'),
            'last_name1' => $this->faker->lastName(),
            'last_name2' => $this->faker->lastName(),
            'document_type' => $this->faker->randomElement(['DNI', 'CE']),
            'document_number' => $this->faker->unique()->numerify('########'),
            'birth_date' => $this->faker->date(),
            'gender' => $gender,
            'marital_status' => $this->faker->randomElement(['SOLTERO', 'CASAOO', 'VIUDO', 'DIVORCIADO']),
            'ruc' => $this->faker->numerify('###########'),
            'has_disability' => $this->faker->boolean(10),
            'profile_photo_path' => null,

            // Información de contacto
            'location_code_id' => LocationCode::factory(),
            'address' => $this->faker->streetAddress(),
            'address_reference' => $this->faker->sentence(3),
            'phone' => $this->faker->numerify('01#######'),
            'cell_phone' => $this->faker->numerify('9########'),
            'email' => $this->faker->unique()->safeEmail(),

            // Información Académica
            'education_level_detail_id' => EducationLevelDetail::factory(),
            'occupation_id' => Occupation::factory(),
            'tuition_code' => $this->faker->unique()->numerify('######'),
            'specialty_id' => Specialty::factory(),
            'specialty_number' => $this->faker->numberBetween(1, 5),
            'university_id' => University::factory(),
            'graduation_year' => $this->faker->numberBetween(2000, 2025),

            'is_active' => $this->faker->boolean(75),
            'schedule_type' => $this->faker->randomElement(['FIXED', 'CUSTOM'])
        ];
    }
}
