<?php

namespace App\Filament\Widgets;

use App\Models\Medication;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class MedicationAdminChart extends ChartWidget
{
    protected static ?int $sort = 5;
    protected static ?string $heading = 'الأدوية في المخزن للسنة الحالية';

    protected function getData(): array
    {
        $data = Trend::model(Medication::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Medications Chart',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
