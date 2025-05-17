<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(PatientSeeder::class);
        $this->call(MedicationSeeder::class);
        $this->call(AppointmentSeeder::class);
        $this->call(CheckupCategorySeeder::class);
        $this->call(LabTestSeeder::class);
        $this->call(PsychologicalAssessmentSeeder::class);
        $this->call(SocialAssessmentSeeder::class);
        $this->call(LabPrescriptionSeeder::class);
        $this->call(MedicationPrescriptionSeeder::class);
        $this->call(MedicationGivingSeeder::class);
    }
}
