<?php

namespace App\Filament\Resources\MenuLainnyaResource\Pages;

use App\Filament\Resources\MenuLainnyaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenuLainnyas extends ListRecords
{
    protected static string $resource = MenuLainnyaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
