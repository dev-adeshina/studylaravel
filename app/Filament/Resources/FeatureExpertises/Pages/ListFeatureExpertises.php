<?php

namespace App\Filament\Resources\FeatureExpertises\Pages;

use App\Filament\Resources\FeatureExpertises\FeatureExpertiseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFeatureExpertises extends ListRecords
{
    protected static string $resource = FeatureExpertiseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
