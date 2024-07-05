<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SampulResource\Pages;
use App\Filament\Resources\SampulResource\RelationManagers;
use App\Models\Sampul;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class SampulResource extends Resource
{
    protected static ?string $model = Sampul::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    FileUpload::make('file_sampul')->image()->label('Sampul Halaman Beranda')->imageEditor()->directory('sampul')->required(),
                    RichEditor::make('deskripsi_sampul')
                        ->label('Deskripsi Sampul')
                    // ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('file_sampul')->label('Sampul Halaman Beranda'),
                TextColumn::make('deskripsi_sampul')->label('Deskripsi Sampul')->limit(50)->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->requiresConfirmation()->after(function (Sampul $record) {
                    // delete single
                    if ($record->file_sampul) {
                        Storage::disk('public')->delete($record->file_sampul);
                    }
                    // delete multiple
                    // if ($record->image) {
                    //     foreach ($record->profil_cover as $ph) Storage::disk('public')->delete($ph);
                    // }
                }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(
                        function ($records) {
                            foreach ($records as $record) {
                                if ($record->file_sampul) {
                                    Storage::disk('public')->delete($record->file_sampul);
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
            'index' => Pages\ListSampuls::route('/'),
            'create' => Pages\CreateSampul::route('/create'),
            'edit' => Pages\EditSampul::route('/{record}/edit'),
        ];
    }
}
