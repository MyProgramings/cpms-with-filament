<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CheckupCategory;
use App\Models\LabTest;

class LabTestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LabTest::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'unit' => fake()->word(),
            'reference_min' => fake()->randomFloat(2, 0, 999999.99),
            'reference_max' => fake()->randomFloat(2, 0, 999999.99),
            'checkup_category_id' => CheckupCategory::factory(),
        ];
    }
}
