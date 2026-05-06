<?php

namespace App\Filament\Resources\ServiceFeatureMains\Pages;

use App\Filament\Resources\ServiceFeatureMains\ServiceFeatureMainResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServiceFeatureMains extends ListRecords
{
    protected static string $resource = ServiceFeatureMainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
