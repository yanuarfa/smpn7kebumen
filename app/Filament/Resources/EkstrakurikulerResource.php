<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkstrakurikulerResource\Pages;
use App\Filament\Resources\EkstrakurikulerResource\RelationManagers;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Str;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerResource extends Resource
{
    protected static ?string $model = Ekstrakurikuler::class;

    protected static ?string $navigationLabel = 'Ekstrakurikuler';

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('nama')->live(onBlur: true)->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }

                        $set('slug', Str::slug($state));
                    })
                        ->label('Nama Ekstrakurikuler')->unique(table: Ekstrakurikuler::class, ignoreRecord: true)
                        ->required(),
                    Hidden::make('slug')->required()->unique(
                        table: Ekstrakurikuler::class,
                        column: 'slug',
                        ignoreRecord: true
                    ),
                    FileUpload::make('gambar')->image()->label('Gambar Ekstrakurikuler')->imageEditor()->directory('ekstrakurikuler')->required(),
                    RichEditor::make('deskripsi')
                        ->label('Penjelasan Ekstrakurikuler')
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Ekstrakurikuler')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('deskripsi')->label('Penjelasan Ekstrakurikuler')->html()->limit(50),
                ImageColumn::make('gambar')->label('Gambar Ekstrakurikuler')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->label('Lihat'),
                Tables\Actions\DeleteAction::make()->label('Hapus')->requiresConfirmation()->after(
                    function (Ekstrakurikuler $record) {
                        // delete single
                        if ($record->gambar) {
                            Storage::disk('public')->delete($record->gambar);
                        }

                        // if ($record->foto) {
                        //     foreach ($record->foto as $ph) Storage::disk('public')->delete($ph);
                        // }
                    }
                ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(
                        function ($records) {
                            foreach ($records as $record) {
                                if ($record->gambar) {
                                    Storage::disk('public')->delete($record->gambar);
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
            'index' => Pages\ListEkstrakurikulers::route('/'),
            'create' => Pages\CreateEkstrakurikuler::route('/create'),
            'edit' => Pages\EditEkstrakurikuler::route('/{record}/edit'),
        ];
    }
}
