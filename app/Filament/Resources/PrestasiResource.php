<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestasiResource\Pages;
use App\Filament\Resources\PrestasiResource\RelationManagers;
use App\Models\JenisPrestasi;
use App\Models\Prestasi;
use App\Models\TingkatPrestasi;
use Illuminate\Support\Str;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';
    protected static ?string $navigationLabel = 'Prestasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('nama_prestasi')
                        ->label('Nama Prestasi')->unique(table: Prestasi::class, ignoreRecord: true)
                        ->required()->live(onBlur: true)->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                            if (($get('slug') ?? '') !== Str::slug($old)) {
                                return;
                            }

                            $set('slug', Str::slug($state));
                        }),
                    Hidden::make('slug')->required()->unique(
                        table: Prestasi::class,
                        column: 'slug',
                        ignoreRecord: true
                    ),
                    Select::make('jenisprestasi_id')
                        ->label('Jenis Prestasi')
                        ->options(JenisPrestasi::all()->pluck('nama', 'id'))->required(),
                    Select::make('tingkatprestasi_id')
                        ->label('Tingkat Prestasi')
                        ->options(TingkatPrestasi::all()->pluck('nama', 'id'))->required(),
                    Select::make('kategori')
                        ->label('Kategori')
                        ->options([
                            'Siswa' => 'Siswa',
                            'Guru' => 'Guru',
                            'Sekolah' => 'Sekolah',
                        ])->required(),
                    TextInput::make('tahun')->label('Tahun')->required(),
                    FileUpload::make('gambar')->image()->label('Gambar')->imageEditor()->directory('prestasi')->required(),
                    RichEditor::make('detail_prestasi')
                        ->label('Detail Prestasi')
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_prestasi')
                    ->label('Nama Prestasi')
                    ->searchable()
                    ->sortable()->limit(50),
                TextColumn::make('jenisprestasi.nama')->label('Jenis Prestasi')->sortable(),
                TextColumn::make('tingkatprestasi.nama')->label('Tingkat Prestasi')->sortable(),
                TextColumn::make('kategori')->label('Kategori')->sortable(),
                TextColumn::make('tahun')->label('Tahun')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->label('Detail'),
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
            'index' => Pages\ListPrestasis::route('/'),
            'create' => Pages\CreatePrestasi::route('/create'),
            'edit' => Pages\EditPrestasi::route('/{record}/edit'),
        ];
    }
}
