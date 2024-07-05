<?php

namespace App\Filament\Resources\MenuLainnyaResource\Pages;

use App\Filament\Resources\MenuLainnyaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenuLainnya extends EditRecord
{
    protected static string $resource = MenuLainnyaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
