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
        CheckupCategory::factory()->count(5)->create();
    }
}
