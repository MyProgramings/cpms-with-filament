<?php

namespace App\Filament\Resources\MedicationGivingResource\Pages;

use App\Filament\Resources\MedicationGivingResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMedicationGiving extends ViewRecord
{
    protected static string $resource = MedicationGivingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
