<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\User;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'scheduled_at' => fake()->dateTime(),
            'appointment_type' => fake()->word(),
            'notes' => fake()->text(),
            'is_closed' => fake()->boolean(),
            'patient_id' => Patient::factory(),
            'user_id' => User::factory(),
        ];
    }
}
