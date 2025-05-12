<?php

namespace App\Filament\Resources\CheckupCategoryResource\Pages;

use App\Filament\Resources\CheckupCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCheckupCategory extends ViewRecord
{
    protected static string $resource = CheckupCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
