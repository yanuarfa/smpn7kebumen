<?php

namespace App\Filament\Resources\PrestasiResource\Pages;

use App\Filament\Resources\PrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrestasis extends ListRecords
{
    protected static string $resource = PrestasiResource::class;
    protected static ?string $title = 'Prestasi';
    protected static ?string $breadcrumb = 'Daftar Prestasi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Buat Prestasi'),
        ];
    }
}
