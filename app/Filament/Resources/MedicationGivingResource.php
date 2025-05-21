<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicationGivingResource\Pages;
use App\Filament\Resources\MedicationGivingResource\RelationManagers;
use App\Models\MedicationGiving;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedicationGivingResource extends Resource
{
    protected static ?string $model = MedicationGiving::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'medication';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('blood_pressure')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('temperature')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('pulse')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('respiration_rate')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('pain_score')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('weight')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('height')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('body_surface_area')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('vascular_access_device')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('electrolyte_status')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('chemotherapy_cycle')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('day_of_treatment')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('referred_by_doctor')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('check_in_time')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('registry_sheet_number')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('pathology_report_number')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('radiology_report_number')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('previous_chemo_treatment')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DatePicker::make('chemo_pre_treatment_date'),
                Forms\Components\TextInput::make('previous_chemo_cycle_date')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('pre_chemo_lab_test_results')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('health_center_visit')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('fever_during_cycle')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('fever_value')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('patient_has_thermometer')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('new_symptoms')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('next_appointment_for_cycle')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('nursing_notes')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('doctor_notes')
                    ->columnSpanFull(),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('patient_id')
                    ->relationship('patient', 'name')
                    ->required(),
                Forms\Components\Select::make('medication_prescription_id')
                    ->relationship('medicationPrescription', 'id')
                    ->required(),
                Forms\Components\Select::make('appointment_id')
                    ->relationship('appointment', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('blood_pressure')
                    ->searchable(),
                Tables\Columns\TextColumn::make('temperature')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pulse')
                    ->searchable(),
                Tables\Columns\TextColumn::make('respiration_rate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pain_score')
                    ->searchable(),
                Tables\Columns\TextColumn::make('weight')
                    ->searchable(),
                Tables\Columns\TextColumn::make('height')
                    ->searchable(),
                Tables\Columns\TextColumn::make('body_surface_area')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vascular_access_device')
                    ->searchable(),
                Tables\Columns\TextColumn::make('electrolyte_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('chemotherapy_cycle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('day_of_treatment')
                    ->searchable(),
                Tables\Columns\TextColumn::make('referred_by_doctor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('check_in_time')
                    ->searchable(),
                Tables\Columns\TextColumn::make('registry_sheet_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pathology_report_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('radiology_report_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_chemo_treatment')
                    ->searchable(),
                Tables\Columns\TextColumn::make('chemo_pre_treatment_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('previous_chemo_cycle_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pre_chemo_lab_test_results')
                    ->searchable(),
                Tables\Columns\TextColumn::make('health_center_visit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fever_during_cycle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fever_value')
                    ->searchable(),
                Tables\Columns\TextColumn::make('patient_has_thermometer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('new_symptoms')
                    ->searchable(),
                Tables\Columns\TextColumn::make('next_appointment_for_cycle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('patient.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('medicationPrescription.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('appointment.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedicationGivings::route('/'),
            'create' => Pages\CreateMedicationGiving::route('/create'),
            'view' => Pages\ViewMedicationGiving::route('/{record}'),
            'edit' => Pages\EditMedicationGiving::route('/{record}/edit'),
        ];
    }
}
