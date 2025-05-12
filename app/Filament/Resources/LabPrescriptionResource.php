<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LabPrescriptionResource\Pages;
use App\Filament\Resources\LabPrescriptionResource\RelationManagers;
use App\Models\LabPrescription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LabPrescriptionResource extends Resource
{
    protected static ?string $model = LabPrescription::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('test_description')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('result_description')
                    ->maxLength(255)
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
                Forms\Components\Select::make('checkup_category_id')
                    ->relationship('checkupCategory', 'name')
                    ->required(),
                Forms\Components\Select::make('lab_test_id')
                    ->relationship('labTest', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('test_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('result_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('appointment.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('patient.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('checkupCategory.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('labTest.name')
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
            'index' => Pages\ListLabPrescriptions::route('/'),
            'create' => Pages\CreateLabPrescription::route('/create'),
            'view' => Pages\ViewLabPrescription::route('/{record}'),
            'edit' => Pages\EditLabPrescription::route('/{record}/edit'),
        ];
    }
}
