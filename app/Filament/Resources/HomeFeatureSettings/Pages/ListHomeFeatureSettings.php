<?php

namespace App\Filament\Resources\HomeFeatureSettings\Pages;

use App\Filament\Resources\HomeFeatureSettings\HomeFeatureSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeFeatureSettings extends ListRecords
{
    protected static string $resource = HomeFeatureSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
