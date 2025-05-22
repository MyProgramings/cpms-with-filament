<?php

namespace App\Filament\Widgets;

use App\Models\LabTest;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class LabAdminChart extends ChartWidget
{
    protected static ?int $sort = 4;
    protected static ?string $heading = 'عدد الفحوصات في السنة الحالية';

    protected function getData(): array
    {
        $data = Trend::model(LabTest::class)
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
        return 'bar';
    }
}
