<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StrukturOrganisasiResource\Pages;
use App\Filament\Resources\StrukturOrganisasiResource\RelationManagers;
use App\Models\StrukturOrganisasi;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class StrukturOrganisasiResource extends Resource
{
    protected static ?string $model = StrukturOrganisasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';
    protected static ?string $navigationLabel = 'Struktur Organisasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('judul_struktur')
                        ->label('Nama Struktur')->unique(table: StrukturOrganisasi::class)
                        ->required(),
                    TextInput::make('deskripsi_struktur')->label('Deskripsi Struktur')->required(),
                    FileUpload::make('gambar_struktur')->image()->label('Gambar Struktur')->imageEditor()->directory('struktur')->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_struktur')
                    ->label('Nama Struktur')
                    ->searchable()
                    ->sortable()->limit(50),
                TextColumn::make('deskripsi_struktur')->label('Deskripsi Struktur')->searchable()->limit(50),
                ImageColumn::make('gambar_struktur')->label('Gambar Struktur')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->label('Lihat'),
                Tables\Actions\DeleteAction::make()->label('Hapus')->requiresConfirmation()->after(
                    function (StrukturOrganisasi $record) {
                        // delete single
                        if ($record->gambar_struktur) {
                            Storage::disk('public')->delete($record->gambar_struktur);
                        }
                        // delete multiple
                        // if ($record->image) {
                        //     foreach ($record->image as $ph) Storage::disk('public')->delete($ph);
                        // }
                    }
                ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(
                        function ($records) {
                            foreach ($records as $record) {
                                if ($record->gambar_struktur) {
                                    Storage::disk('public')->delete($record->gambar_struktur);
                                }
                            }
                        }
                    )
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
            'index' => Pages\ListStrukturOrganisasis::route('/'),
            'create' => Pages\CreateStrukturOrganisasi::route('/create'),
            'edit' => Pages\EditStrukturOrganisasi::route('/{record}/edit'),
        ];
    }
}
