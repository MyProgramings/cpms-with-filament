<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LabTestResource\Pages;
use App\Filament\Resources\LabTestResource\RelationManagers;
use App\Models\LabTest;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LabTestResource extends Resource
{
    protected static ?string $model = LabTest::class;

    protected static ?string $navigationIcon = 'heroicon-o-funnel';

    protected static ?string $navigationGroup = 'Lab';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('checkup_category_id')
                    ->relationship('checkupCategory', 'name')
                    ->required()
                    ->label('Checkup Category')
                    ->preload()
                    ->native(false),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Test Name'),
                TextInput::make('unit')
                    ->required()
                    ->maxLength(255)
                    ->label('Unit'),
                TextInput::make('reference_min')
                    ->required()
                    ->numeric()
                    ->label('Reference Min'),
                TextInput::make('reference_max')
                    ->required()
                    ->numeric()
                    ->label('Reference Max'),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('checkupCategory.name')
                    ->sortable()
                    ->searchable()
                    ->label('Checkup Category'),
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Test Name'),
                TextColumn::make('unit')
                    ->sortable()
                    ->searchable()
                    ->label('Unit'),
                TextColumn::make('reference_min')
                    ->sortable()
                    ->searchable()
                    ->label('Reference Min'),
                TextColumn::make('reference_max')
                    ->sortable()
                    ->searchable()
                    ->label('Reference Max'),
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
            'index' => Pages\ListLabTests::route('/'),
            'create' => Pages\CreateLabTest::route('/create'),
            'view' => Pages\ViewLabTest::route('/{record}'),
            'edit' => Pages\EditLabTest::route('/{record}/edit'),
        ];
    }
}
