<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'age',
        'place_of_birth',
        'birthday',
        'gender',
        'social_status',
        'profession',
        'nationality',
        'card_number',
        'file_number',
        'file_colors',
        'permanent_address',
        'temporary_address',
        'near_mosque',
        'phone_number',
        'diagnosis',
        'incident_date',
        'previous_treatment',
        'chemotherapy',
        'radiotherapy',
        'surgery',
        'site_of_tumor',
        'type_of_tumor',
        'status',
        'doctors_name',
        'speciality',
        'reported_by',
        'is_smokeout',
        'is_khat',
        'is_chwingtobaco',
        'date_of_last_contact',
        'cause_of_death',
        'notes_re',
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
            'birthday' => 'date',
            'incident_date' => 'date',
            'previous_treatment' => 'boolean',
            'chemotherapy' => 'boolean',
            'radiotherapy' => 'boolean',
            'surgery' => 'boolean',
            'is_smokeout' => 'boolean',
            'is_khat' => 'boolean',
            'is_chwingtobaco' => 'boolean',
            'date_of_last_contact' => 'date',
        ];
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
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
}
