<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicationPrescriptionResource\Pages;
use App\Filament\Resources\MedicationPrescriptionResource\RelationManagers;
use App\Models\Medication;
use App\Models\MedicationPrescription;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class MedicationPrescriptionResource extends Resource
{
    protected static ?string $model = MedicationPrescription::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'medication';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')
                    ->default(fn() => Auth::id()),
                Hidden::make('pharmacist_id')
                    ->default(fn() => Auth::id()),
                Hidden::make('appointment_id')
                    ->default(1),
                Hidden::make('patient_id')
                    ->default(1),
                Select::make('category')
                    ->options([
                        'supplementary' => 'Supplementary',
                        'chemist' => 'Chemist',
                    ])
                    ->preload()
                    ->live()
                    ->afterStateUpdated(fn(Set $set) => $set('medication_id', null))
                    ->native(false)
                    ->required()
                    ->label('Medication Category'),
                Select::make('medication_id')
                    ->options(fn(Get $get): Collection => Medication::query()
                        ->where('category', $get('category'))
                        ->pluck('medication_name', 'id'))
                    ->preload()
                    ->live()
                    ->native(false)
                    ->required()
                    ->label('Medication Name'),
                TextInput::make('quantity')
                    ->maxLength(255)
                    ->numeric()
                    ->required(),
                TextInput::make('power')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('doses_per_day')
                    ->numeric()
                    ->required(),
                TextInput::make('duration_days')
                    ->numeric()
                    ->required(),
                TextInput::make('medication_notes')
                    ->maxLength(255),
                Toggle::make('doctor_confirmed')
                    ->required(),
                Toggle::make('pharmacist_dispensed')
                    ->required(),
                TextInput::make('pharmacist')
                    ->required()
                    ->maxLength(255),
                TextInput::make('preparer')
                    ->required()
                    ->maxLength(255),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pharmacist')
                    ->searchable(),
                TextColumn::make('preparer')
                    ->searchable(),
                TextColumn::make('quantity')
                    ->searchable(),
                TextColumn::make('total_quantity')
                    ->searchable(),
                TextColumn::make('category')
                    ->searchable(),
                TextColumn::make('power')
                    ->searchable(),
                TextColumn::make('doses_per_day')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('duration_days')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('medication_notes')
                    ->searchable(),
                IconColumn::make('doctor_confirmed')
                    ->boolean(),
                TextColumn::make('doctor_confirmed_at')
                    ->dateTime()
                    ->sortable(),
                IconColumn::make('pharmacist_dispensed')
                    ->boolean(),
                TextColumn::make('pharmacist_dispensed_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('pharmacist.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('appointment.id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('patient.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('medication.id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            'index' => Pages\ListMedicationPrescriptions::route('/'),
            'create' => Pages\CreateMedicationPrescription::route('/create'),
            'view' => Pages\ViewMedicationPrescription::route('/{record}'),
            'edit' => Pages\EditMedicationPrescription::route('/{record}/edit'),
        ];
    }
}
