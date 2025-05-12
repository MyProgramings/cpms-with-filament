<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\PsychologicalAssessment;
use App\Models\User;

class PsychologicalAssessmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PsychologicalAssessment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'general_status' => fake()->word(),
            'sleep_patterns' => fake()->word(),
            'appetite' => fake()->word(),
            'memory_status' => fake()->word(),
            'emotional_response' => fake()->word(),
            'illness_awareness' => fake()->word(),
            'social_orientation' => fake()->word(),
            'disease_perception' => fake()->word(),
            'medication_effects' => fake()->word(),
            'psychological_effects' => fake()->word(),
            'recommendations' => fake()->text(),
            'notes' => fake()->text(),
            'user_id' => User::factory(),
            'patient_id' => Patient::factory(),
            'appointment_id' => Appointment::factory(),
        ];
    }
}
