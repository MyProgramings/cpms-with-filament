<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\SocialAssessment;
use App\Models\User;

class SocialAssessmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialAssessment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'general_status' => fake()->word(),
            'monthly_income' => fake()->word(),
            'income_source' => fake()->word(),
            'housing_type' => fake()->word(),
            'housing_status' => fake()->word(),
            'landlord_name' => fake()->word(),
            'landlord_phone' => fake()->word(),
            'condition_before_illness' => fake()->word(),
            'condition_after_illness' => fake()->word(),
            'illness_date' => fake()->date(),
            'travel_history' => fake()->word(),
            'family_illness_history' => fake()->word(),
            'disease_type' => fake()->word(),
            'severity_rating' => fake()->word(),
            'doctor_notes' => fake()->word(),
            'social_worker_notes' => fake()->word(),
            'user_id' => User::factory(),
            'patient_id' => Patient::factory(),
            'appointment_id' => Appointment::factory(),
        ];
    }
}
