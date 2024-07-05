<?php

namespace App\Filament\Resources\PengajarResource\Pages;

use App\Filament\Resources\PengajarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengajars extends ListRecords
{
    protected static string $resource = PengajarResource::class;

    protected static ?string $title = 'Pengajar';
    protected static ?string $icon = 'heroicon-o-user';
    protected static $label = 'title';
    protected static ?string $breadcrumb = 'Daftar Pengajar';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Pengajar'),
        ];
    }
}
