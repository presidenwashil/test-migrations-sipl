<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalResource\Pages;
use App\Filament\Resources\JadwalResource\RelationManagers;
use App\Models\Kelompok;
use App\Models\Jadwal;
use Filament\Forms;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('hari')
                    ->label('Hari')
                    ->options([
                        'Senin' => 'Senin',
                        'Selasa' => 'Selasa',
                        'Rabu' => 'Rabu',
                        'Kamis' => 'Kamis',
                        'Jumat' => 'Jumat',
                        'Sabtu' => 'Sabtu',
                        'Minggu' => 'Minggu',
                    ])
                    ->native(false)
                    ->required(),
                Forms\Components\Select::make('sesi')
                    ->label('Sesi')
                    ->options([
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                    ])
                    ->native(false)
                    ->required(),
                Forms\Components\Select::make('waktu')
                    ->label('Waktu')
                    ->options([
                        '08:00 - 09:30' => '08:00 - 09:30',
                        '09:30 - 11:00' => '09:30 - 11:00',
                        '11:00 - 12:30' => '11:00 - 12:30',
                        '12:30 - 14:00' => '12:30 - 14:00',
                        '14:00 - 15:30' => '14:00 - 15:30',
                        '15:30 - 17:00' => '15:30 - 17:00',
                        '17:00 - 18:30' => '17:00 - 18:30',
                        '19:00 - 20:30' => '19:00 - 20:30',
                        '20:30 - 22:00' => '20:30 - 22:00',
                    ])
                    ->native(false)
                    ->required(),
                Forms\Components\Select::make('matakuliah_id')
                    ->label('Matakuliah')
                    ->relationship(name:'matakuliah', titleAttribute:'nama')
                    ->preload()
                    ->live()
                    ->afterStateUpdated(fn (Set $set) => $set('kelompok_id', null))
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('kelompok_id')
                    ->label('Kelompok')
                    ->options(fn (Get $get): Collection => Kelompok::query()
                        ->where('matakuliah_id', $get('matakuliah_id'))
                        ->pluck('nama', 'id'))
                    ->preload()
                    ->live()
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('ruangan_id')
                    ->label('Ruangan')
                    ->relationship(name:'ruangan', titleAttribute:'nama')
                    ->preload()
                    ->live()
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('ajaran_id')
                    ->label('Tahun Ajaran')
                    ->relationship(name:'ajaran', titleAttribute:'tahun')
                    ->preload()
                    ->live()
                    ->searchable()
                    ->required(),
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hari'),
                Tables\Columns\TextColumn::make('sesi'),
                Tables\Columns\TextColumn::make('waktu'),
                Tables\Columns\TextColumn::make('matakuliah.nama'),
                Tables\Columns\TextColumn::make('kelompok.nama'),
                Tables\Columns\TextColumn::make('ruangan.nama'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }
}
