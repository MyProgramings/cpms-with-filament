<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appointment;
use App\Models\MedicationGiving;
use App\Models\MedicationPrescription;
use App\Models\Patient;
use App\Models\User;

class MedicationGivingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicationGiving::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'blood_pressure' => fake()->word(),
            'temperature' => fake()->word(),
            'pulse' => fake()->word(),
            'respiration_rate' => fake()->word(),
            'pain_score' => fake()->word(),
            'weight' => fake()->word(),
            'height' => fake()->word(),
            'body_surface_area' => fake()->word(),
            'vascular_access_device' => fake()->word(),
            'electrolyte_status' => fake()->word(),
            'chemotherapy_cycle' => fake()->word(),
            'day_of_treatment' => fake()->word(),
            'referred_by_doctor' => fake()->word(),
            'check_in_time' => fake()->word(),
            'registry_sheet_number' => fake()->word(),
            'pathology_report_number' => fake()->word(),
            'radiology_report_number' => fake()->word(),
            'previous_chemo_treatment' => fake()->word(),
            'chemo_pre_treatment_date' => fake()->date(),
            'previous_chemo_cycle_date' => fake()->word(),
            'pre_chemo_lab_test_results' => fake()->word(),
            'health_center_visit' => fake()->word(),
            'fever_during_cycle' => fake()->word(),
            'fever_value' => fake()->word(),
            'patient_has_thermometer' => fake()->word(),
            'new_symptoms' => fake()->word(),
            'next_appointment_for_cycle' => fake()->word(),
            'nursing_notes' => fake()->text(),
            'doctor_notes' => fake()->text(),
            'user_id' => User::factory(),
            'patient_id' => Patient::factory(),
            'medication_prescription_id' => MedicationPrescription::factory(),
            'appointment_id' => Appointment::factory(),
        ];
    }
}
