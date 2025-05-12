<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicationPrescriptionResource\Pages;
use App\Filament\Resources\MedicationPrescriptionResource\RelationManagers;
use App\Models\MedicationPrescription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedicationPrescriptionResource extends Resource
{
    protected static ?string $model = MedicationPrescription::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('pharmacist')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('preparer')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('quantity')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('total_quantity')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('medicine_type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('power')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('doses_per_day')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('duration_days')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('medication_notes')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('doctor_confirmed')
                    ->required(),
                Forms\Components\DateTimePicker::make('doctor_confirmed_at'),
                Forms\Components\Toggle::make('pharmacist_dispensed')
                    ->required(),
                Forms\Components\DateTimePicker::make('pharmacist_dispensed_at'),
                Forms\Components\Select::make('pharmacist_id')
                    ->relationship('pharmacist', 'name')
                    ->default(null),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('appointment_id')
                    ->relationship('appointment', 'id')
                    ->required(),
                Forms\Components\Select::make('patient_id')
                    ->relationship('patient', 'name')
                    ->required(),
                Forms\Components\Select::make('medication_id')
                    ->relationship('medication', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pharmacist')
                    ->searchable(),
                Tables\Columns\TextColumn::make('preparer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_quantity')
                    ->searchable(),
                Tables\Columns\TextColumn::make('medicine_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('power')
                    ->searchable(),
                Tables\Columns\TextColumn::make('doses_per_day')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duration_days')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('medication_notes')
                    ->searchable(),
                Tables\Columns\IconColumn::make('doctor_confirmed')
                    ->boolean(),
                Tables\Columns\TextColumn::make('doctor_confirmed_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('pharmacist_dispensed')
                    ->boolean(),
                Tables\Columns\TextColumn::make('pharmacist_dispensed_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pharmacist.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('appointment.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('patient.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('medication.id')
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedicationPrescriptions::route('/'),
            'create' => Pages\CreateMedicationPrescription::route('/create'),
            'view' => Pages\ViewMedicationPrescription::route('/{record}'),
            'edit' => Pages\EditMedicationPrescription::route('/{record}/edit'),
        ];
    }
}
