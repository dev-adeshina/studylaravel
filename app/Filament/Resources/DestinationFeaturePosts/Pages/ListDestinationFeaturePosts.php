<?php

namespace App\Filament\Resources\DestinationFeaturePosts\Pages;

use App\Filament\Resources\DestinationFeaturePosts\DestinationFeaturePostResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDestinationFeaturePosts extends ListRecords
{
    protected static string $resource = DestinationFeaturePostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
