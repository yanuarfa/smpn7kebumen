<?php

namespace App\Filament\Resources\SastraResource\Pages;

use App\Filament\Resources\SastraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSastra extends EditRecord
{
    protected static string $resource = SastraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
