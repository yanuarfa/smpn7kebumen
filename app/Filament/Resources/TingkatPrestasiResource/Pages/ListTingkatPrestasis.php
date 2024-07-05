<?php

namespace App\Filament\Resources\TingkatPrestasiResource\Pages;

use App\Filament\Resources\TingkatPrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTingkatPrestasis extends ListRecords
{
    protected static string $resource = TingkatPrestasiResource::class;
    protected static ?string $title = 'Tingkat Prestasi';
    protected static ?string $breadcrumb = 'Daftar Tingkat Prestasi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Buat Tingkat Prestasi'),
        ];
    }
}
