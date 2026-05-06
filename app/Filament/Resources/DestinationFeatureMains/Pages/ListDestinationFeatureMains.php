<?php

namespace App\Filament\Resources\DestinationFeatureMains\Pages;

use App\Filament\Resources\DestinationFeatureMains\DestinationFeatureMainResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDestinationFeatureMains extends ListRecords
{
    protected static string $resource = DestinationFeatureMainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
