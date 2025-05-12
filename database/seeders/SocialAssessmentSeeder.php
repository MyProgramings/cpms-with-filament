<?php

namespace Database\Seeders;

use App\Models\SocialAssessment;
use Illuminate\Database\Seeder;

class SocialAssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialAssessment::factory()->count(5)->create();
    }
}
