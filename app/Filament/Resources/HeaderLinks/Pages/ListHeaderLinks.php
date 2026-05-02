<?php

namespace App\Filament\Resources\HeaderLinks\Pages;

use App\Filament\Resources\HeaderLinks\HeaderLinkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHeaderLinks extends ListRecords
{
    protected static string $resource = HeaderLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
