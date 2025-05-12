<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LabTest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'unit',
        'reference_min',
        'reference_max',
        'checkup_category_id',
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
            'reference_min' => 'decimal:2',
            'reference_max' => 'decimal:2',
            'checkup_category_id' => 'integer',
        ];
    }

    public function checkupCategory(): BelongsTo
    {
        return $this->belongsTo(CheckupCategory::class);
    }

    public function labPrescriptions(): HasMany
    {
        return $this->hasMany(LabPrescription::class);
    }
}
