<?php

namespace Database\Seeders;

use App\Models\PsychologicalAssessment;
use Illuminate\Database\Seeder;

class PsychologicalAssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PsychologicalAssessment::factory()->count(5)->create();
    }
}
