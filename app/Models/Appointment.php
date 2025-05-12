<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'scheduled_at',
        'appointment_type',
        'notes',
        'is_closed',
        'patient_id',
        'user_id',
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
            'scheduled_at' => 'datetime',
            'is_closed' => 'boolean',
            'patient_id' => 'integer',
            'user_id' => 'integer',
        ];
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function psychologicalAssessments(): HasMany
    {
        return $this->hasMany(PsychologicalAssessment::class);
    }

    public function socialAssessments(): HasMany
    {
        return $this->hasMany(SocialAssessment::class);
    }

    public function medicationPrescriptions(): HasMany
    {
        return $this->hasMany(MedicationPrescription::class);
    }

    public function medicationGivings(): HasMany
    {
        return $this->hasMany(MedicationGiving::class);
    }

    public function labPrescriptions(): HasMany
    {
        return $this->hasMany(LabPrescription::class);
    }
}
