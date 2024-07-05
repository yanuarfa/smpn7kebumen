<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use RelationManagers\CategoryRelationManager;
use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Category;
use Filament\Forms\Components\Select;

// use Illuminate\Database\Eloquent\SoftDeletingScope;
// use App\Filament\Resources\ArticleResource\RelationManagers;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationLabel = 'Artikel';
    // protected static string $icon = 'heroicon-o-newspaper';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')->live(onBlur: true)->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {

                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }

                        $set('slug', Str::slug($state));
                    })
                        ->label('Judul Artikel')->unique(table: Article::class, ignoreRecord: true, column: 'title')
                        ->required(),
                    TextInput::make('description')->label('Deskripsi Artikel')->required(),
                    Select::make('category_id')
                        ->label('Kategori')
                        ->options(Category::all()->pluck('name', 'id'))->required(),
                    Hidden::make('slug')->required()->unique(
                        table: Article::class,
                        column: 'slug',
                        ignoreRecord: true
                    ),
                    RichEditor::make('content')
                        ->label('Isi Artikel')
                        ->required(),
                    FileUpload::make('image')->image()->label('Thumbnail')->imageEditor()->directory('berita')->required(),
                    // BaseFileUpload::make('image')
                    //     ->label('Image')
                    //     ->required(),
                ]),
                // RelationManagers\UserRelationManager::make('user')
                //     ->label('User')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()->limit(50),
                TextColumn::make('description')->label('Deskripsi Artikel')->searchable()->limit(50),
                ImageColumn::make('image')->label('Gambar')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->label("Lihat"),
                Tables\Actions\DeleteAction::make()->label('Hapus')->requiresConfirmation()->after(
                    function (Article $record) {
                        // delete single
                        if ($record->image) {
                            Storage::disk('public')->delete($record->image);
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
                                if ($record->image) {
                                    Storage::disk('public')->delete($record->image);
                                }
                            }
                        }
                    ),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
