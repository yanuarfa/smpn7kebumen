<?php

namespace App\Filament\Resources\SampulResource\Pages;

use App\Filament\Resources\SampulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSampuls extends ListRecords
{
    protected static string $resource = SampulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
