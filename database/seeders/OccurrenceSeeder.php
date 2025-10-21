<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Occurrence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OccurrenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Occurrence::create([
            'name' => 'LIBRE',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'DESCANSO',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'FERIADO CALENDARIO',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'FERIADO CON DEVOLUCIÓN',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'LICENCIA CON GOCE',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'LIBRE POR DEVOLUCIÓN',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'LICENCIA POR FALLECIMIENTO FAMILIAR',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'LICENCIA POR LACTANCIA MATERNA',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'LICENCIA SIN GOCE',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'MATERNIDAD',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'PASANTIA',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'LICENCIA POR PATERNIDAD',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'VACACIONES',
            'is_active' => true
        ]);

        Occurrence::create([
            'name' => 'SUSPENSIÓN',
            'is_active' => true
        ]);
    }
}
