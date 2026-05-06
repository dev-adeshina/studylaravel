<?php

namespace App\Filament\Resources\DestinationFeatureMains\Pages;

use App\Filament\Resources\DestinationFeatureMains\DestinationFeatureMainResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDestinationFeatureMain extends EditRecord
{
    protected static string $resource = DestinationFeatureMainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
