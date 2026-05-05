<?php

namespace App\Filament\Resources\HomeFeatureApplications\Pages;

use App\Filament\Resources\HomeFeatureApplications\HomeFeatureApplicationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeFeatureApplications extends ListRecords
{
    protected static string $resource = HomeFeatureApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
