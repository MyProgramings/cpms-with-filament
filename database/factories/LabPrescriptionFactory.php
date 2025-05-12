<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\CheckupCategory;
use App\Models\LabPrescription;
use App\Models\LabTest;
use App\Models\Patient;
use App\Models\User;

class LabPrescriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LabPrescription::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'test_description' => fake()->word(),
            'result_description' => fake()->word(),
            'user_id' => User::factory(),
            'appointment_id' => Appointment::factory(),
            'patient_id' => Patient::factory(),
            'checkup_category_id' => CheckupCategory::factory(),
            'lab_test_id' => LabTest::factory(),
        ];
    }
}
