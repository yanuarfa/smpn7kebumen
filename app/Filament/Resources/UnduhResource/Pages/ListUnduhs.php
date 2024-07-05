<?php

namespace App\Filament\Resources\UnduhResource\Pages;

use App\Filament\Resources\UnduhResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnduhs extends ListRecords
{
    protected static string $resource = UnduhResource::class;

    protected static ?string $title = 'Unggah File';
    // protected static ?string $icon = 'heroicon-o-newspaper';
    protected static $label = 'title';
    protected static ?string $breadcrumb = 'Daftar File';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah File'),
        ];
    }
}
