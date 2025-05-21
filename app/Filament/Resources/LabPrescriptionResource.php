<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LabPrescriptionResource\Pages;
use App\Filament\Resources\LabPrescriptionResource\RelationManagers;
use App\Models\CheckupCategory;
use App\Models\LabPrescription;
use App\Models\LabTest;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class LabPrescriptionResource extends Resource
{
    protected static ?string $model = LabPrescription::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Lab';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('test_description')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('result_description')
                    ->maxLength(255)
                    ->default(null),
                Select::make('checkup_category_id')
                    ->relationship('checkupCategory', 'name')
                    ->preload()
                    ->live()
                    ->afterStateUpdated(fn (Set $set) => $set('lab_test_id', null))
                    ->required()
                    ->native(false),
                Select::make('lab_test_id')
                    ->options(fn (Get $get): Collection => LabTest::query()
                        ->where('checkup_category_id' , $get('checkup_category_id'))
                        ->pluck('name', 'id'))
                    ->preload()
                    ->live()
                    ->required()
                    ->native(false),
                Hidden::make('user_id')
                    ->default(fn () => Auth::id()),
                Select::make('appointment_id')
                    ->relationship('appointment', 'scheduled_at')
                    ->required()
                    ->native(false),
                Select::make('patient_id')
                    ->relationship('patient', 'name')
                    ->required()
                    ->native(false),
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
            'index' => Pages\ListLabPrescriptions::route('/'),
            'create' => Pages\CreateLabPrescription::route('/create'),
            'view' => Pages\ViewLabPrescription::route('/{record}'),
            'edit' => Pages\EditLabPrescription::route('/{record}/edit'),
        ];
    }
}
