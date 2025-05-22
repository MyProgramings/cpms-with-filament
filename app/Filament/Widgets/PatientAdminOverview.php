<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use App\Models\LabPrescription;
use App\Models\MedicationPrescription;
use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientAdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('عدد المرضى', Patient::query()->count())
                ->description('مريض')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('عدد الفحوصات المعمولة', LabPrescription::query()->count())
                ->description('فحص')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('عدد الأدوية التي صرفت', MedicationPrescription::query()->sum('quantity'))
                ->description('دواء')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('danger'),
            Stat::make('عدد المواعيد', Appointment::query()->count())
                ->description('موعد')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
        ];
    }
}
