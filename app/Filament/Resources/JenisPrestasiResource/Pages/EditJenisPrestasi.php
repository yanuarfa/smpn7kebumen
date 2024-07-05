<?php

namespace App\Filament\Resources\JenisPrestasiResource\Pages;

use App\Filament\Resources\JenisPrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisPrestasi extends EditRecord
{
    protected static string $resource = JenisPrestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
