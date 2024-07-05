<?php

namespace App\Filament\Resources\JenisPrestasiResource\Pages;

use App\Filament\Resources\JenisPrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisPrestasis extends ListRecords
{
    protected static string $resource = JenisPrestasiResource::class;

    protected static ?string $title = 'Jenis Prestasi';
    protected static ?string $breadcrumb = 'Daftar Jenis Prestasi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Buat Jenis Prestasi'),
        ];
    }
}
