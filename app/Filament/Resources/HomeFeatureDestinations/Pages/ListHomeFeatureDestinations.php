<?php

namespace App\Filament\Resources\HomeFeatureDestinations\Pages;

use App\Filament\Resources\HomeFeatureDestinations\HomeFeatureDestinationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeFeatureDestinations extends ListRecords
{
    protected static string $resource = HomeFeatureDestinationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
