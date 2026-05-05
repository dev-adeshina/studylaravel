<?php

namespace App\Filament\Resources\HomeFeatureApplications\Pages;

use App\Filament\Resources\HomeFeatureApplications\HomeFeatureApplicationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomeFeatureApplication extends EditRecord
{
    protected static string $resource = HomeFeatureApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
