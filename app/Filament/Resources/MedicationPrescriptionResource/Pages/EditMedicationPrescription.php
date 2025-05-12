<?php

namespace App\Filament\Resources\MedicationPrescriptionResource\Pages;

use App\Filament\Resources\MedicationPrescriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedicationPrescription extends EditRecord
{
    protected static string $resource = MedicationPrescriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
