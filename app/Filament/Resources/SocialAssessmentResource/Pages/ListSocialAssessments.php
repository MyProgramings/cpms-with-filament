<?php

namespace App\Filament\Resources\SocialAssessmentResource\Pages;

use App\Filament\Resources\SocialAssessmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSocialAssessments extends ListRecords
{
    protected static string $resource = SocialAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
