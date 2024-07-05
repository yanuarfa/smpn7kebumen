<?php

namespace App\Filament\Resources\SampulResource\Pages;

use App\Filament\Resources\SampulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSampul extends EditRecord
{
    protected static string $resource = SampulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
