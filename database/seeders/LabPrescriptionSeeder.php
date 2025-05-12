<?php

namespace Database\Seeders;

use App\Models\LabPrescription;
use Illuminate\Database\Seeder;

class LabPrescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LabPrescription::factory()->count(5)->create();
    }
}
