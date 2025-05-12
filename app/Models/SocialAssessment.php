<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialAssessment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'general_status',
        'monthly_income',
        'income_source',
        'housing_type',
        'housing_status',
        'landlord_name',
        'landlord_phone',
        'condition_before_illness',
        'condition_after_illness',
        'illness_date',
        'travel_history',
        'family_illness_history',
        'disease_type',
        'severity_rating',
        'doctor_notes',
        'social_worker_notes',
        'user_id',
        'patient_id',
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
            'illness_date' => 'date',
            'user_id' => 'integer',
            'patient_id' => 'integer',
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

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
}
