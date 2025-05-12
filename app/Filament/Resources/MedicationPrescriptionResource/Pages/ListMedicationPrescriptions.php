<?php

namespace App\Filament\Resources\MedicationPrescriptionResource\Pages;

use App\Filament\Resources\MedicationPrescriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedicationPrescriptions extends ListRecords
{
    protected static string $resource = MedicationPrescriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
