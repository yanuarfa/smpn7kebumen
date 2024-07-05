<?php

namespace App\Filament\Resources\EkstrakurikulerResource\Pages;

use App\Filament\Resources\EkstrakurikulerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEkstrakurikulers extends ListRecords
{
    protected static string $resource = EkstrakurikulerResource::class;

    protected static ?string $title = 'Ekstrakurikuler';
    protected static ?string $icon = 'heroicon-o-building-office-2';
    protected static $label = 'title';
    protected static ?string $breadcrumb = 'Daftar Ekstrakurikuler';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Ekstrakurikuler'),
        ];
    }
}
