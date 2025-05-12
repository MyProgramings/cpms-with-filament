<?php

namespace App\Filament\Resources\CheckupCategoryResource\Pages;

use App\Filament\Resources\CheckupCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCheckupCategory extends EditRecord
{
    protected static string $resource = CheckupCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
