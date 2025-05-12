<?php

namespace App\Filament\Resources\MedicationGivingResource\Pages;

use App\Filament\Resources\MedicationGivingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedicationGivings extends ListRecords
{
    protected static string $resource = MedicationGivingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
