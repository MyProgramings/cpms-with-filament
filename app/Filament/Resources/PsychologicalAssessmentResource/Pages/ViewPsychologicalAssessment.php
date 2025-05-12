<?php

namespace App\Filament\Resources\PsychologicalAssessmentResource\Pages;

use App\Filament\Resources\PsychologicalAssessmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPsychologicalAssessment extends ViewRecord
{
    protected static string $resource = PsychologicalAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
