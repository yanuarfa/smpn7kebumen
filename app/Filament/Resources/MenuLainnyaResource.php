<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuLainnyaResource\Pages;
use App\Filament\Resources\MenuLainnyaResource\RelationManagers;
use App\Models\MenuLainnya;
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

class MenuLainnyaResource extends Resource
{
    protected static ?string $model = MenuLainnya::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('nama_menu')
                        ->label('Nama Menu')
                        ->required(),
                    TextInput::make('link_menu')->label('Link Menu')->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_menu')
                    ->label('Nama Menu'),
                TextColumn::make('link_menu')->label('Link Menu')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListMenuLainnyas::route('/'),
            'create' => Pages\CreateMenuLainnya::route('/create'),
            'edit' => Pages\EditMenuLainnya::route('/{record}/edit'),
        ];
    }
}
