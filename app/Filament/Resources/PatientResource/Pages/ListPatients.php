<?php

namespace App\Filament\Resources\PatientResource\Pages;

use App\Filament\Resources\PatientResource;
use App\Models\Patient;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Mpdf\Mpdf;

class ListPatients extends ListRecords
{
    protected static string $resource = PatientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('pdf')
                ->icon('heroicon-o-document-arrow-down')
                ->action(function () {
                    $patients = Patient::all(['name', 'age', 'status', 'file_number', 'file_colors', 'permanent_address']);

                    $mpdf = new Mpdf([
                        'mode' => 'utf-8',
                        'default_font' => 'arabic',
                    ]);

                    $html = view('exports.patients', ['patients' => $patients])->render();
                    $mpdf->WriteHTML($html);

                    return response()->streamDownload(function () use ($mpdf) {
                        echo $mpdf->Output('', 'S');
                    }, 'patients-report.pdf');
                })
                ->color('primary'),
        ];
    }
}
