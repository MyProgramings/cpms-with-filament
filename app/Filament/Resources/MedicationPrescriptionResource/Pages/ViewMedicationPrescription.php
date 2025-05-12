<?php

namespace App\Filament\Resources\MedicationPrescriptionResource\Pages;

use App\Filament\Resources\MedicationPrescriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMedicationPrescription extends ViewRecord
{
    protected static string $resource = MedicationPrescriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
