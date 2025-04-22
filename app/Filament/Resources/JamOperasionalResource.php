<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\JamOperasional;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\JamOperasionalResource\Pages;
use App\Filament\Resources\JamOperasionalResource\RelationManagers;

class JamOperasionalResource extends Resource
{
    protected static ?string $model = JamOperasional::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';

    protected static ?string $navigationGroup = 'Tentang Kami';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('day')
                    ->options([
                        'Senin' => 'Senin',
                        'Selasa' => 'Selasa',
                        'Rabu' => 'Rabu',
                        'Kamis' => 'Kamis',
                        'Jumat' => 'Jumat',
                        'Sabtu' => 'Sabtu',
                        'Minggu' => 'Minggu',
                    ])
                    ->required() // Optional: jika ingin menjadikannya wajib
                    ->label('Hari'),

                TimePicker::make('open_time') // Menambahkan TimePicker untuk open_time
                    ->required()  // Wajib diisi
                    ->label('Jam Buka')
                    ->withoutSeconds(), // Opsional, jika Anda ingin menghilangkan detik dalam format waktu

                TimePicker::make('close_time') // Menambahkan TimePicker untuk close_time
                    ->required() // Wajib diisi
                    ->label('Jam Tutup')
                    ->withoutSeconds(),// Opsional, jika Anda ingin menghilangkan detik dalam format waktu
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom yang sesuai, misalnya kolom untuk jam operasional
                Tables\Columns\TextColumn::make('day')->label('Hari'),
                Tables\Columns\TextColumn::make('open_time')->label('Jam Buka'),
                Tables\Columns\TextColumn::make('close_time')->label('Jam Tutup'),
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
            'index' => Pages\ListJamOperasionals::route('/'),
            'create' => Pages\CreateJamOperasional::route('/create'),
            'edit' => Pages\EditJamOperasional::route('/{record}/edit'),
        ];
    }
}
