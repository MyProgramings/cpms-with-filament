<?php

namespace App\Filament\Resources\LabPrescriptionResource\Pages;

use App\Filament\Resources\LabPrescriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLabPrescription extends EditRecord
{
    protected static string $resource = LabPrescriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
