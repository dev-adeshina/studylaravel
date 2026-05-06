<?php

namespace App\Filament\Resources\AboutFeatureStories\Pages;

use App\Filament\Resources\AboutFeatureStories\AboutFeatureStoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutFeatureStories extends ListRecords
{
    protected static string $resource = AboutFeatureStoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
