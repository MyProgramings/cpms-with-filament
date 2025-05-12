<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialAssessmentResource\Pages;
use App\Filament\Resources\SocialAssessmentResource\RelationManagers;
use App\Models\SocialAssessment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialAssessmentResource extends Resource
{
    protected static ?string $model = SocialAssessment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('general_status')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('monthly_income')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('income_source')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('housing_type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('housing_status')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('landlord_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('landlord_phone')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('condition_before_illness')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('condition_after_illness')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DatePicker::make('illness_date'),
                Forms\Components\TextInput::make('travel_history')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('family_illness_history')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('disease_type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('severity_rating')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('doctor_notes')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('social_worker_notes')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('patient_id')
                    ->relationship('patient', 'name')
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
                Tables\Columns\TextColumn::make('general_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('monthly_income')
                    ->searchable(),
                Tables\Columns\TextColumn::make('income_source')
                    ->searchable(),
                Tables\Columns\TextColumn::make('housing_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('housing_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('landlord_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('landlord_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('condition_before_illness')
                    ->searchable(),
                Tables\Columns\TextColumn::make('condition_after_illness')
                    ->searchable(),
                Tables\Columns\TextColumn::make('illness_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('travel_history')
                    ->searchable(),
                Tables\Columns\TextColumn::make('family_illness_history')
                    ->searchable(),
                Tables\Columns\TextColumn::make('disease_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('severity_rating')
                    ->searchable(),
                Tables\Columns\TextColumn::make('doctor_notes')
                    ->searchable(),
                Tables\Columns\TextColumn::make('social_worker_notes')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('patient.name')
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSocialAssessments::route('/'),
            'create' => Pages\CreateSocialAssessment::route('/create'),
            'view' => Pages\ViewSocialAssessment::route('/{record}'),
            'edit' => Pages\EditSocialAssessment::route('/{record}/edit'),
        ];
    }
}
