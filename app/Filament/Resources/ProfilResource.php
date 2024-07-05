<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilResource\Pages;
use App\Filament\Resources\ProfilResource\RelationManagers;
use App\Models\Profil;
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

class ProfilResource extends Resource
{
    protected static ?string $model = Profil::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Profil Sekolah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    FileUpload::make('profil_cover')->image()->label('Sampul Profil')->imageEditor()->directory('profil')->required(),
                    RichEditor::make('profil_sekolah')
                        ->label('Isi Profil Sekolah')
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profil_cover')->label('Sampul Profil'),
                TextColumn::make('profil_sekolah')->label('Profil Sekolah')->limit(50)->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->label("Lihat"),
                Tables\Actions\DeleteAction::make()->label('Hapus')->requiresConfirmation()
                    ->after(
                        function (Profil $record) {
                            // delete single
                            if ($record->profil_cover) {
                                Storage::disk('public')->delete($record->profil_cover);
                            }
                            // delete multiple
                            // if ($record->image) {
                            //     foreach ($record->profil_cover as $ph) Storage::disk('public')->delete($ph);
                            // }
                        }
                    ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->after(
                            function ($records) {
                                foreach ($records as $record) {
                                    if ($record->profil_cover) {
                                        Storage::disk('public')->delete($record->profil_cover);
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
            'index' => Pages\ListProfils::route('/'),
            'create' => Pages\CreateProfil::route('/create'),
            'edit' => Pages\EditProfil::route('/{record}/edit'),
        ];
    }
}
