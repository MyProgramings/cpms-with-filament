<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicationGiving extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'blood_pressure',
        'temperature',
        'pulse',
        'respiration_rate',
        'pain_score',
        'weight',
        'height',
        'body_surface_area',
        'vascular_access_device',
        'electrolyte_status',
        'chemotherapy_cycle',
        'day_of_treatment',
        'referred_by_doctor',
        'check_in_time',
        'registry_sheet_number',
        'pathology_report_number',
        'radiology_report_number',
        'previous_chemo_treatment',
        'chemo_pre_treatment_date',
        'previous_chemo_cycle_date',
        'pre_chemo_lab_test_results',
        'health_center_visit',
        'fever_during_cycle',
        'fever_value',
        'patient_has_thermometer',
        'new_symptoms',
        'next_appointment_for_cycle',
        'nursing_notes',
        'doctor_notes',
        'user_id',
        'patient_id',
        'medication_prescription_id',
        'appointment_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'chemo_pre_treatment_date' => 'date',
            'user_id' => 'integer',
            'patient_id' => 'integer',
            'medication_prescription_id' => 'integer',
            'appointment_id' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function medicationPrescription(): BelongsTo
    {
        return $this->belongsTo(MedicationPrescription::class);
    }

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
}
