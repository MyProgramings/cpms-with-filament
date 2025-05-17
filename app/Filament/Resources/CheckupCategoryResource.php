<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CheckupCategoryResource\Pages;
use App\Filament\Resources\CheckupCategoryResource\RelationManagers;
use App\Models\CheckupCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CheckupCategoryResource extends Resource
{
    protected static ?string $model = CheckupCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationGroup = 'Lab';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListCheckupCategories::route('/'),
            'create' => Pages\CreateCheckupCategory::route('/create'),
            'view' => Pages\ViewCheckupCategory::route('/{record}'),
            'edit' => Pages\EditCheckupCategory::route('/{record}/edit'),
        ];
    }
}
