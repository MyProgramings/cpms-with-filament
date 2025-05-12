<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Patient;

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
        return [
            'name' => fake()->name(),
            'age' => fake()->numberBetween(-10000, 10000),
            'place_of_birth' => fake()->word(),
            'birthday' => fake()->date(),
            'gender' => fake()->regexify('[A-Za-z0-9]{10}'),
            'social_status' => fake()->word(),
            'profession' => fake()->word(),
            'nationality' => fake()->word(),
            'card_number' => fake()->word(),
            'file_number' => fake()->word(),
            'file_colors' => fake()->word(),
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
