<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AjaranResource\Pages;
use App\Filament\Resources\AjaranResource\RelationManagers;
use App\Models\Ajaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AjaranResource extends Resource
{
    protected static ?string $model = Ajaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationGroup = 'Data Master';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tahun')
                    ->label('Tahun')
                    ->required(),
                Forms\Components\Select::make('semester')
                    ->label('Semester')
                    ->options([
                        'Gasal' => 'Gasal',
                        'Genap' => 'Genap',
                    ])
                    ->native(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('semester'),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->beforeStateUpdated( function (Builder $query, $state) {

                    })
                    ->afterStateUpdated( function (Builder $query, $state) {

                    }),
            ])
            ->filters([
                //
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
            'index' => Pages\ListAjarans::route('/'),
            'create' => Pages\CreateAjaran::route('/create'),
            'edit' => Pages\EditAjaran::route('/{record}/edit'),
        ];
    }
}
