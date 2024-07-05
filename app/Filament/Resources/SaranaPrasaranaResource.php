<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SaranaPrasaranaResource\Pages;
use App\Filament\Resources\SaranaPrasaranaResource\RelationManagers;
use App\Models\SaranaPrasarana;
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

class SaranaPrasaranaResource extends Resource
{
    protected static ?string $model = SaranaPrasarana::class;

    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('nama')->label('Nama Sarana Prasarana')->required(),
                    FileUpload::make('file_gambar')->image()->label('Gambar Sarana Prasarana')->imageEditor()->directory('sarana-prasarana')->required(),
                    RichEditor::make('deskripsi')
                        ->label('Deskripsi Sarana Prasarana')
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama Sarana Prasarana')->limit(50),
                ImageColumn::make('file_gambar')->label('Gambar Sarana Prasarana'),
                TextColumn::make('deskripsi')->label('Deskripsi Sarana Prasarana')->limit(50)->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->requiresConfirmation()->after(
                    function (SaranaPrasarana $record) {
                        if ($record->file_gambar) {
                            Storage::disk('public')->delete($record->file_gambar);
                        }
                    }
                ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(
                        function ($records) {
                            foreach ($records as $record) {
                                if ($record->file_gambar) {
                                    Storage::disk('public')->delete($record->file_gambar);
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
            'index' => Pages\ListSaranaPrasaranas::route('/'),
            'create' => Pages\CreateSaranaPrasarana::route('/create'),
            'edit' => Pages\EditSaranaPrasarana::route('/{record}/edit'),
        ];
    }
}
