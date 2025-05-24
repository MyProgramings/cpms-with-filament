<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicationResource\Pages;
use App\Filament\Resources\MedicationResource\RelationManagers;
use App\Models\Medication;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class MedicationResource extends Resource
{
    protected static ?string $model = Medication::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    protected static ?string $navigationGroup = 'medication';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')
                    ->default(fn() => Auth::id()),
                Select::make('category')
                    ->options([
                        'supplementary' => 'Supplementary',
                        'chemist' => 'Chemist',
                    ])
                    ->native(false)
                    ->required(),
                TextInput::make('medication_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('quantity_in_stock')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
                TextInput::make('dosage_strength')
                    ->required()
                    ->maxLength(255),
                TextInput::make('dosage_form')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('expiration_date')
                    ->required()
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable()
                    ->label('ID'),
                TextColumn::make('medication_name')
                    ->sortable()
                    ->searchable()
                    ->label('Medication Name'),
                TextColumn::make('quantity_in_stock')
                    ->sortable()
                    ->searchable()
                    ->label('Quantity in Stock'),
                TextColumn::make('dosage_strength')
                    ->sortable()
                    ->searchable()
                    ->label('Dosage Strength'),
                TextColumn::make('dosage_form')
                    ->sortable()
                    ->searchable()
                    ->label('Dosage Form'),
                TextColumn::make('category')
                    ->sortable()
                    ->searchable()
                    ->label('Category'),
                TextColumn::make('expiration_date')
                    ->sortable()
                    ->searchable()
                    ->date()
                    ->label('Expiration Date'),
                TextColumn::make('unit_price')
                    ->sortable()
                    ->searchable()
                    ->numeric()
                    ->label('Unit Price'),
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
            'index' => Pages\ListMedications::route('/'),
            'create' => Pages\CreateMedication::route('/create'),
            'view' => Pages\ViewMedication::route('/{record}'),
            'edit' => Pages\EditMedication::route('/{record}/edit'),
        ];
    }
}
