<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MatakuliahResource\Pages;
use App\Filament\Resources\MatakuliahResource\RelationManagers;
use App\Models\Matakuliah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MatakuliahResource extends Resource
{
    protected static ?string $model = Matakuliah::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Data Master';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode')
                    ->label('Kode')
                    ->required()
                    ->unique()
                    ->placeholder('Masukkan kode matakuliah')
                    ->disableAutocomplete(),
                Forms\Components\TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->placeholder('Masukkan nama matakuliah')
                    ->disableAutocomplete(),
                Forms\Components\TextInput::make('sks')
                    ->label('SKS')
                    ->numeric()
                    ->required()
                    ->placeholder('Masukkan jumlah SKS')
                    ->disableAutocomplete(),
                Forms\Components\Select::make('kelas')
                    ->label('Kelas')
                    ->options([
                        'PA' => 'PA',
                        'PB' => 'PB',
                        'MA' => 'MA',
                    ])
                    ->native(false)
                    ->required()
                    ->placeholder('Pilih kelas'),
                Forms\Components\Select::make('prodi_id')
                    ->label('Prodi')
                    ->relationship(name:'prodi', titleAttribute:'nama')
                    ->searchable()
                    ->required()
                    ->placeholder('Pilih prodi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode')
                    ->label('Kode')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sks')
                    ->label('SKS')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelas')
                    ->label('Kelas')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('prodi.nama')
                    ->label('Prodi')
                    ->searchable()
                    ->sortable(),
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
            RelationManagers\KelompoksRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMatakuliahs::route('/'),
            'create' => Pages\CreateMatakuliah::route('/create'),
            'edit' => Pages\EditMatakuliah::route('/{record}/edit'),
        ];
    }
}
