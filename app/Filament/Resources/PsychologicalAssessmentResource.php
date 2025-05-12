<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PsychologicalAssessmentResource\Pages;
use App\Filament\Resources\PsychologicalAssessmentResource\RelationManagers;
use App\Models\PsychologicalAssessment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PsychologicalAssessmentResource extends Resource
{
    protected static ?string $model = PsychologicalAssessment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('general_status')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('sleep_patterns')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('appetite')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('memory_status')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('emotional_response')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('illness_awareness')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('social_orientation')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('disease_perception')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('medication_effects')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('psychological_effects')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('recommendations')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('sleep_patterns')
                    ->searchable(),
                Tables\Columns\TextColumn::make('appetite')
                    ->searchable(),
                Tables\Columns\TextColumn::make('memory_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('emotional_response')
                    ->searchable(),
                Tables\Columns\TextColumn::make('illness_awareness')
                    ->searchable(),
                Tables\Columns\TextColumn::make('social_orientation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('disease_perception')
                    ->searchable(),
                Tables\Columns\TextColumn::make('medication_effects')
                    ->searchable(),
                Tables\Columns\TextColumn::make('psychological_effects')
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
            'index' => Pages\ListPsychologicalAssessments::route('/'),
            'create' => Pages\CreatePsychologicalAssessment::route('/create'),
            'view' => Pages\ViewPsychologicalAssessment::route('/{record}'),
            'edit' => Pages\EditPsychologicalAssessment::route('/{record}/edit'),
        ];
    }
}
