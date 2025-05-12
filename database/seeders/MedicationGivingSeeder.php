<?php

namespace Database\Seeders;

use App\Models\MedicationGiving;
use Illuminate\Database\Seeder;

class MedicationGivingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicationGiving::factory()->count(5)->create();
    }
}
