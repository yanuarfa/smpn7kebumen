<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UnduhResource\Pages;
use App\Filament\Resources\UnduhResource\RelationManagers;
use App\Models\Unduh;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class UnduhResource extends Resource
{
    protected static ?string $model = Unduh::class;

    protected static ?string $navigationLabel = 'Unggah File';
    protected static ?string $navigationIcon = 'heroicon-o-folder-arrow-down';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('nama_file')->label('Nama File')->required(),
                    FileUpload::make('file')->label('File')->directory('unduh')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_file')->label('Nama File')->searchable()->sortable()->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->label('Hapus')->requiresConfirmation()
                    ->after(
                        function (Unduh $record) {
                            // delete single
                            if ($record->file) {
                                Storage::disk('public')->delete($record->file);
                            }
                            // delete multiple
                            // if ($record->file) {
                            //     foreach ($record->file as $ph) Storage::disk('public')->delete($ph);
                            // }
                        }
                    ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(
                        function ($records) {
                            foreach ($records as $record) {
                                if ($record->file) {
                                    Storage::disk('public')->delete($record->file);
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
            'index' => Pages\ListUnduhs::route('/'),
            'create' => Pages\CreateUnduh::route('/create'),
            'edit' => Pages\EditUnduh::route('/{record}/edit'),
        ];
    }
}
