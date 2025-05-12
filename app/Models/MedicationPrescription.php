<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicationPrescription extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pharmacist',
        'preparer',
        'quantity',
        'total_quantity',
        'medicine_type',
        'power',
        'doses_per_day',
        'duration_days',
        'medication_notes',
        'doctor_confirmed',
        'doctor_confirmed_at',
        'pharmacist_dispensed',
        'pharmacist_dispensed_at',
        'pharmacist_id',
        'user_id',
        'appointment_id',
        'patient_id',
        'medication_id',
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
            'doctor_confirmed' => 'boolean',
            'doctor_confirmed_at' => 'timestamp',
            'pharmacist_dispensed' => 'boolean',
            'pharmacist_dispensed_at' => 'timestamp',
            'pharmacist_id' => 'integer',
            'user_id' => 'integer',
            'appointment_id' => 'integer',
            'patient_id' => 'integer',
            'medication_id' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function medication(): BelongsTo
    {
        return $this->belongsTo(Medication::class);
    }

    public function pharmacist(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
