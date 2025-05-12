<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Medication;
use App\Models\User;

class MedicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medication::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'medication_name' => fake()->word(),
            'quantity_in_stock' => fake()->numberBetween(-10000, 10000),
            'dosage_strength' => fake()->word(),
            'dosage_form' => fake()->word(),
            'category' => fake()->word(),
            'expiration_date' => fake()->date(),
            'notes' => fake()->text(),
            'unit_price' => fake()->numberBetween(-10000, 10000),
            'user_id' => User::factory(),
        ];
    }
}
