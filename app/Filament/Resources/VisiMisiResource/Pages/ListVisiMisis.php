<?php

namespace App\Filament\Resources\VisiMisiResource\Pages;

use App\Filament\Resources\VisiMisiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisiMisis extends ListRecords
{
    protected static string $resource = VisiMisiResource::class;
    protected static ?string $title = 'Visi Misi';
    protected static ?string $breadcrumb = 'Daftar Visi Misi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Buat Visi Misi'),
        ];
    }
}
