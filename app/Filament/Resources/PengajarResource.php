<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengajarResource\Pages;
use App\Filament\Resources\PengajarResource\RelationManagers;
use App\Models\Pengajar;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
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

class PengajarResource extends Resource
{
    protected static ?string $model = Pengajar::class;

    protected static ?string $navigationLabel = 'Pengajar';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('nama')
                        ->label('Nama Pengajar')->unique(table: Pengajar::class, ignoreRecord: true)
                        ->required(),
                    TextInput::make('bidang')->label('Bidang')->required(),
                    TextInput::make('jabatan')->label('Jabatan')->required(),
                    TextInput::make('email')->label('Email')->required(),
                    Select::make('status')
                        ->label('Status')
                        ->options([
                            'Aktif' => 'Aktif',
                            'Tidak Aktif' => 'Tidak Aktif',
                        ])
                        // ->default('Aktif')
                        ->required(),
                    FileUpload::make('foto')->image()->label('Foto')->imageEditor()->directory('pengajar')->required(),
                    // BaseFileUpload::make('image')
                    //     ->label('Image')
                    //     ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Pengajar')
                    ->searchable()
                    ->sortable()->limit(50),
                TextColumn::make('bidang')->label('Bidang')->sortable(),
                TextColumn::make('jabatan')->label('Jabatan')->sortable(),
                TextColumn::make('email')->label('Email')->searchable(),
                TextColumn::make('status')->label('Status')->sortable(),
                ImageColumn::make('foto')->label('Foto')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->label('Hapus')->requiresConfirmation()->after(
                    function (Pengajar $record) {
                        // delete single
                        if ($record->foto) {
                            Storage::disk('public')->delete($record->foto);
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
                                if ($record->foto) {
                                    Storage::disk('public')->delete($record->foto);
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
            'index' => Pages\ListPengajars::route('/'),
            'create' => Pages\CreatePengajar::route('/create'),
            'edit' => Pages\EditPengajar::route('/{record}/edit'),
        ];
    }
}
