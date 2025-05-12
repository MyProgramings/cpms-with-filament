<?php

namespace Database\Seeders;

use App\Models\MedicationPrescription;
use Illuminate\Database\Seeder;

class MedicationPrescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicationPrescription::factory()->count(5)->create();
    }
}
