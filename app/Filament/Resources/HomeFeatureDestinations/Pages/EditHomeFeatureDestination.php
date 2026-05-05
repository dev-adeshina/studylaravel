<?php

namespace App\Filament\Resources\HomeFeatureDestinations\Pages;

use App\Filament\Resources\HomeFeatureDestinations\HomeFeatureDestinationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomeFeatureDestination extends EditRecord
{
    protected static string $resource = HomeFeatureDestinationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
