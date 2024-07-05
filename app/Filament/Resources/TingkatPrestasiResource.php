<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TingkatPrestasiResource\Pages;
use App\Filament\Resources\TingkatPrestasiResource\RelationManagers;
use App\Models\TingkatPrestasi;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TingkatPrestasiResource extends Resource
{
    protected static ?string $model = TingkatPrestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-trending-up';
    protected static ?string $navigationLabel = 'Tingkat Prestasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('nama')
                        ->label('Tingkat Prestasi')->unique(table: TingkatPrestasi::class, ignoreRecord: true)
                        ->required(),
                    TextInput::make('deskripsi')->label('Deskripsi Tingkat Prestasi')->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Tingkat Prestasi')
                    ->searchable()
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('deskripsi')->label('Deskripsi Tingkat Prestasi')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->label('Hapus'),
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
            'index' => Pages\ListTingkatPrestasis::route('/'),
            'create' => Pages\CreateTingkatPrestasi::route('/create'),
            'edit' => Pages\EditTingkatPrestasi::route('/{record}/edit'),
        ];
    }
}
