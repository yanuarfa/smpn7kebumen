<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisPrestasiResource\Pages;
use App\Filament\Resources\JenisPrestasiResource\RelationManagers;
use App\Models\JenisPrestasi;
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

class JenisPrestasiResource extends Resource
{
    protected static ?string $model = JenisPrestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-swatch';
    protected static ?string $navigationLabel = 'Jenis Prestasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('nama')
                        ->label('Jenis Prestasi')->unique(table: JenisPrestasi::class, ignoreRecord: true)
                        ->required(),
                    TextInput::make('deskripsi')->label('Deskripsi Jenis Prestasi')->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Jenis Prestasi')
                    ->searchable()
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('deskripsi')->label('Deskripsi Jenis Prestasi')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\EditAction::make()->label('Edit'),
                Tables\Actions\ViewAction::make()->label('Lihat'),
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
            'index' => Pages\ListJenisPrestasis::route('/'),
            'create' => Pages\CreateJenisPrestasi::route('/create'),
            'edit' => Pages\EditJenisPrestasi::route('/{record}/edit'),
        ];
    }
}
