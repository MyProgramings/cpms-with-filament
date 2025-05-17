<?php

namespace Database\Seeders;

use App\Models\CheckupCategory;
use Illuminate\Database\Seeder;

class CheckupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CheckupCategory::firstOrCreate([
            'name'  => 'HEMATOLOGY',
        ]);
        CheckupCategory::firstOrCreate([
            'name'  => 'BIOCHEMISTRY',
        ]);
        CheckupCategory::firstOrCreate([
            'name'  => 'SEROLOGY',
        ]);
        CheckupCategory::firstOrCreate([
            'name'  => 'Endoorinology',
        ]);
        CheckupCategory::firstOrCreate([
            'name'  => 'Immunology',
        ]);
        CheckupCategory::firstOrCreate([
            'name'  => 'Tumor Markers',
        ]);
        CheckupCategory::firstOrCreate([
            'name'  => 'Microsco/Bacterio',
        ]);
        CheckupCategory::firstOrCreate([
            'name'  => 'Urine Chemistry',
        ]);
    }
}
