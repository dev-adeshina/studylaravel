<?php

namespace App\Filament\Resources\FaqFeatureMains\Pages;

use App\Filament\Resources\FaqFeatureMains\FaqFeatureMainResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFaqFeatureMains extends ListRecords
{
    protected static string $resource = FaqFeatureMainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
