<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Patient;
use Illuminate\Support\Arr;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $color = ['#ef4444', '#22c55e', '#3b82f6', '#eab308', '#8b5cf6', '#f97316', '#fff', '#ec4899'];
        $gender = ['male', 'female'];
        $social_status = ['married', 'single', 'divorced', 'widowed'];
        return [
            'name' => fake()->name(),
            'age' => fake()->numberBetween(2, 100),
            'place_of_birth' => fake()->word(),
            'birthday' => fake()->date(),
            'gender' => Arr::random($gender),
            'social_status' => Arr::random($social_status),
            'profession' => fake()->word(),
            'nationality' => fake()->word(),
            'card_number' => fake()->word(),
            'file_number' => fake()->numberBetween(1000, 100000),
            'file_colors' => Arr::random($color),
            'permanent_address' => fake()->word(),
            'temporary_address' => fake()->word(),
            'near_mosque' => fake()->word(),
            'phone_number' => fake()->phoneNumber(),
            'incident_date' => fake()->date(),
            'previous_treatment' => fake()->boolean(),
            'chemotherapy' => fake()->boolean(),
            'radiotherapy' => fake()->boolean(),
            'surgery' => fake()->boolean(),
            'site_of_tumor' => fake()->word(),
            'type_of_tumor' => fake()->word(),
            'status' => fake()->word(),
            'doctors_name' => fake()->word(),
            'speciality' => fake()->word(),
            'reported_by' => fake()->word(),
            'is_smokeout' => fake()->boolean(),
            'is_khat' => fake()->boolean(),
            'is_chwingtobaco' => fake()->boolean(),
            'date_of_last_contact' => fake()->date(),
            'cause_of_death' => fake()->word(),
            'notes_re' => fake()->text(),
        ];
    }
}
