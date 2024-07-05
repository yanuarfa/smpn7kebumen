<?php

namespace App\Filament\Resources\ProfilResource\Pages;

use App\Filament\Resources\ProfilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfils extends ListRecords
{
    protected static string $resource = ProfilResource::class;
    protected static ?string $title = 'Profil Sekolah';
    protected static ?string $breadcrumb = 'Daftar Profil Sekolah';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Buat Profil Sekolah'),
        ];
    }
}
