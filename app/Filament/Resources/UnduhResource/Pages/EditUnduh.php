<?php

namespace App\Filament\Resources\UnduhResource\Pages;

use App\Filament\Resources\UnduhResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUnduh extends EditRecord
{
    protected static string $resource = UnduhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
