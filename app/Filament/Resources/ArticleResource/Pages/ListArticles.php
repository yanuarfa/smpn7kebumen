<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArticles extends ListRecords
{
    protected static string $resource = ArticleResource::class;
    protected static ?string $title = 'Artikel';
    protected static ?string $icon = 'heroicon-o-newspaper';
    protected static $label = 'title';
    protected static ?string $breadcrumb = 'Daftar Artikel';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Buat Artikel'),
        ];
    }
}
