<?php

namespace App\Filament\Resources\AboutFeatureStats\Pages;

use App\Filament\Resources\AboutFeatureStats\AboutFeatureStatResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutFeatureStats extends ListRecords
{
    protected static string $resource = AboutFeatureStatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
