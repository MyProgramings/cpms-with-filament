<?php

namespace App\Filament\Resources\CheckupCategoryResource\Pages;

use App\Filament\Resources\CheckupCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCheckupCategories extends ListRecords
{
    protected static string $resource = CheckupCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
