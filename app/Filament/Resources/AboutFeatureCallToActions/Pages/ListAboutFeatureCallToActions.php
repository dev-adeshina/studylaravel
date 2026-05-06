<?php

namespace App\Filament\Resources\AboutFeatureCallToActions\Pages;

use App\Filament\Resources\AboutFeatureCallToActions\AboutFeatureCallToActionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutFeatureCallToActions extends ListRecords
{
    protected static string $resource = AboutFeatureCallToActionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
