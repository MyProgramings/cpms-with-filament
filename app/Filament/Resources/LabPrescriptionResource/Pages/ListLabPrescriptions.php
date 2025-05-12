<?php

namespace App\Filament\Resources\LabPrescriptionResource\Pages;

use App\Filament\Resources\LabPrescriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLabPrescriptions extends ListRecords
{
    protected static string $resource = LabPrescriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
