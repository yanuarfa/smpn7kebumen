<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SastraResource\Pages;
use App\Models\Sastra;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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

class SastraResource extends Resource
{
    protected static ?string $model = Sastra::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('nama_pengguna')->label('Nama')->required(),
                    TextInput::make('sosial_media')->label('Sosial Media')->required(),
                    TextInput::make('judul')->label('Judul Karya')->required(),
                    FileUpload::make('file_karya')->image()->label('File Karya')->imageEditor()->directory('sastra')->required(),
                    RichEditor::make('deskripsi_karya')
                        ->label('Deskripsi Karya')
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pengguna')->label('Nama')->limit(50),
                TextColumn::make('sosial_media')->label('Sosial Media')->limit(50),
                TextColumn::make('judul')->label('Judul Karya')->limit(50),
                ImageColumn::make('file_karya')->label('File Karya'),
                TextColumn::make('deskripsi_karya')->label('Deskripsi Karya')->limit(50)->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->requiresConfirmation()->after(
                    function (Sastra $record) {
                        if ($record->file_karya) {
                            Storage::disk('public')->delete($record->file_karya);
                        }
                    }
                ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(
                        function ($records) {
                            foreach ($records as $record) {
                                if ($record->file_karya) {
                                    Storage::disk('public')->delete($record->file_karya);
                                }
                            }
                        }
                    ),
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
            'index' => Pages\ListSastras::route('/'),
            'create' => Pages\CreateSastra::route('/create'),
            'edit' => Pages\EditSastra::route('/{record}/edit'),
        ];
    }
}
