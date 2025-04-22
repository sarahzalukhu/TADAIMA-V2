<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Menu;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MenuResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MenuResource\RelationManagers;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-plus';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
            ->schema([
                TextInput::make('name')->required(),
                        
                Select::make('kategori_id')
                            ->label('Kategori')
                            ->relationship('kategori', 'name') // relasi & kolom yang ditampilkan
                            ->searchable()
                            ->preload()
                            ->required(),
                            

                TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->maxLength(10),

                FileUpload::make('image')
                            ->image() // ini penting agar hanya gambar
                            ->directory('menu-images') // folder penyimpanan di storage/app/public/menu-images
                            ->maxSize(1024)
                            ->required()
                            ->label('Gambar'),
                        

                Checkbox::make('bestseller')
                            ->label('Apakah Bestseller?')
                            ->default(false),
                        
                        
                        
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
                Tables\Columns\ImageColumn::make('image'),

                Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

                Tables\Columns\TextColumn::make('kategori.name')
                 ->label('Kategori')
                 ->sortable()
                 ->searchable(),


                Tables\Columns\TextColumn::make('price')
                ->sortable(),
                

                Tables\Columns\IconColumn::make('bestseller')
                 ->label('Bestseller')
                 ->boolean(),
                 
             


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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
