<?php

namespace App\Filament\Resources\SocialAssessmentResource\Pages;

use App\Filament\Resources\SocialAssessmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSocialAssessment extends EditRecord
{
    protected static string $resource = SocialAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
