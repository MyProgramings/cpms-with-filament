<?php

namespace App\Filament\Resources\SocialAssessmentResource\Pages;

use App\Filament\Resources\SocialAssessmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSocialAssessment extends ViewRecord
{
    protected static string $resource = SocialAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
