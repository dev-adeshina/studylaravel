<?php

namespace App\Filament\Resources\AboutFeatureInfoGraphs\Pages;

use App\Filament\Resources\AboutFeatureInfoGraphs\AboutFeatureInfoGraphResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutFeatureInfoGraphs extends ListRecords
{
    protected static string $resource = AboutFeatureInfoGraphResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
