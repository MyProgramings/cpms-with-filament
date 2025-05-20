<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Filament\Resources\PatientResource\RelationManagers;
use App\Models\Patient;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mpdf\Mpdf;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Patient Information')
                    ->description('Fill in the patient information below.')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),
                        TextInput::make('age')
                            ->required()
                            ->numeric()
                            ->maxLength(3),
                        TextInput::make('place_of_birth')
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('birthday')
                            ->required()
                            ->maxDate(now()),
                        Select::make('gender')
                            ->options([
                                'male' => 'Male',
                                'female' => 'Female'
                            ])->native(false)
                            ->required(),
                        Select::make('emasocial_statusil')
                            ->options([
                                'married' => 'Married',
                                'single' => 'Single',
                                'widowed' => 'Widowed',
                                'divorced' => 'Divorced',
                            ])->native(false)
                            ->required(),
                        TextInput::make('profession')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('nationality')
                            ->required()
                            ->maxLength(255),
                    ])->columns(4),
                Section::make('Identification')
                    ->schema([
                        TextInput::make('card_number')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('file_number')
                            ->required()
                            ->maxLength(255),
                        Radio::make('file_colors')
                            ->options([
                                'white' => 'White',
                                'red' => 'Red',
                                'green' => 'Green',
                                'blue' => 'Blue',
                                'yellow' => 'Yellow',
                                'violet' => 'Violet',
                                'orange' => 'Orange',
                                'pink' => 'Pink',
                            ])->inline()
                            ->columnSpanFull(),
                    ])->columns(3),
                Section::make('Contact Information')
                    ->schema([
                        TextInput::make('permanent_address')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('temporary_address')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('near_mosque')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('phone_number')
                            ->required()
                            ->maxLength(255),
                    ])->columns(3),
                Section::make('Clinical History')
                    ->schema([
                        DatePicker::make('incident_date')
                            ->required()
                            ->maxDate(now()),
                        TextInput::make('site_of_tumor')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('type_of_tumor')
                            ->required()
                            ->maxLength(255),
                        Checkbox::make('previous_treatment')
                            ->default(false),
                        Checkbox::make('chemotherapy')
                            ->default(false),
                        Checkbox::make('radiotherapy')
                            ->default(false),
                        Checkbox::make('surgery')
                            ->default(false),
                        Select::make('status')
                            ->options([
                                'recuperate' => 'Recuperate',
                                'live' => 'Live',
                                'dead' => 'Dead'
                            ])
                            ->required(),
                    ])->columns(3),
                Section::make('Treating Team')
                    ->schema([
                        TextInput::make('doctors_name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('speciality')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('reported_by')
                            ->required()
                            ->maxLength(255),
                    ])->columns(3),
                Section::make('Risk Factors')
                    ->schema([
                        Checkbox::make('is_smokeout')
                            ->default(false),
                        Checkbox::make('is_khat')
                            ->default(false),
                        Checkbox::make('is_chwingtobaco')
                            ->default(false),
                    ])->columns(3),
                Section::make('Death & Final Notes')
                    ->schema([
                        DatePicker::make('date_of_last_contact')
                            ->required()
                            ->maxDate(now()),
                        TextInput::make('cause_of_death')
                            ->required()
                            ->maxLength(255),
                    ])->columns(3),
                Textarea::make('notes_re')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                Action::make('Export to PDF')
                    ->icon('heroicon-o-document-arrow-down')
                    ->action(function () {
                        set_time_limit(300);

                        $patients = Patient::all(['name', 'age', 'status', 'file_number', 'file_colors', 'permanent_address']);

                        $mpdf = new Mpdf([
                            'mode' => 'utf-8',
                            'default_font' => 'arabic',
                        ]);

                        $html = view('exports.patients', ['patients' => $patients])->render();
                        $mpdf->WriteHTML($html);

                        return response()->streamDownload(function () use ($mpdf) {
                            echo $mpdf->Output('', 'S');
                        }, 'patients-report.pdf');
                    })
                    ->color('primary'),
            ])
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('age')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('gender')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('file_number')
                    ->sortable()
                    ->searchable()
                    ->extraAttributes(fn($record) => [
                        'class' => $record->file_colors,
                    ]),
                ColorColumn::make('file_colors'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'view' => Pages\ViewPatient::route('/{record}'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
