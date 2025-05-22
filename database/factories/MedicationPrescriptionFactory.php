<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\Medication;
use App\Models\MedicationPrescription;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Support\Arr;

class MedicationPrescriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicationPrescription::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $category = ['supplementary', 'chemist'];
        return [
            'pharmacist' => fake()->word(),
            'preparer' => fake()->word(),
            'quantity' => fake()->numberBetween(1, 10),
            'total_quantity' => fake()->numberBetween(1, 10),
            'category' => Arr::random($category),
            'power' => fake()->word(),
            'doses_per_day' => fake()->numberBetween(-10000, 10000),
            'duration_days' => fake()->numberBetween(-10000, 10000),
            'medication_notes' => fake()->word(),
            'doctor_confirmed' => fake()->boolean(),
            'doctor_confirmed_at' => fake()->dateTime(),
            'pharmacist_dispensed' => fake()->boolean(),
            'pharmacist_dispensed_at' => fake()->dateTime(),
            'pharmacist_id' => User::factory(),
            'user_id' => User::factory(),
            'appointment_id' => Appointment::factory(),
            'patient_id' => Patient::factory(),
            'medication_id' => Medication::factory(),
        ];
    }
}
