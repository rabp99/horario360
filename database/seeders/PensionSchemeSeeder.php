<?php

namespace Database\Seeders;

use App\Models\PensionScheme;
use Illuminate\Database\Seeder;

class PensionSchemeSeeder extends Seeder
{
    public function run(): void
    {
        PensionScheme::factory()->count(10)->create();
    }
}