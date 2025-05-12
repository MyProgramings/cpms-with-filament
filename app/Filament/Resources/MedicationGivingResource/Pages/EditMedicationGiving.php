<?php

namespace App\Filament\Resources\MedicationGivingResource\Pages;

use App\Filament\Resources\MedicationGivingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedicationGiving extends EditRecord
{
    protected static string $resource = MedicationGivingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
