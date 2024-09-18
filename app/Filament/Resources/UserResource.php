<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\District;
use App\Models\Subdistrict;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationLabel = 'Pengguna';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Full name')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('email')
                    ->label('Email address')
                    ->required()
                    ->maxLength(32)
                    ->email()
                    ->unique(User::class, 'email', ignoreRecord: true)
                    ->visible(fn(string $operation) => $operation === 'create'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255)
                    ->visible(fn(string $operation) => $operation === 'create'),
                Forms\Components\TextInput::make('phone')
                    ->label('Phone')
                    ->required()
                    ->tel()
                    ->maxLength(24),
                Forms\Components\Select::make('district_id')
                    ->label('Kabupaten')
                    ->options(District::all()->pluck('name', 'id'))
                    ->reactive()
                    ->afterStateUpdated(fn($state, Forms\Set $set) => $set('district_id', $state)),
                Forms\Components\Select::make('subdistrict_id')
                    ->label('Kecamatan')
                    ->options(fn(Forms\Get $get) => Subdistrict::where('district_id', $get('district_id'))->pluck('name', 'id')
                        ->toArray()),
                Forms\Components\TextInput::make('address')
                    ->label('Address')
                    ->required()
                    ->maxLength(64),
                Forms\Components\Select::make('role')->options([
                    'admin' => 'Admin',
                    'doctor' => 'Pengusada',
                    'visitor' => 'Visitor',
                ])->required(),
                Forms\Components\Hidden::make('email_verified_at')
                    ->default(now()),
                Forms\Components\Textarea::make('map_address')
                    ->maxLength(65535)
                    ->columnSpan('full'),
                Forms\Components\Section::make('Photo')
                    ->schema([
                        Forms\Components\FileUpload::make('photo')
                            ->image()
                            ->hiddenLabel(),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('role'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('role')->options([
                    'admin' => 'Admin',
                    'doctor' => 'Doctor',
                    'visitor' => 'Visitor',
                ])
            ])
            ->actions([
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
