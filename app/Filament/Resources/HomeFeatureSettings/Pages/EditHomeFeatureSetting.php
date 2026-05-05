<?php

namespace App\Filament\Resources\HomeFeatureSettings\Pages;

use App\Filament\Resources\HomeFeatureSettings\HomeFeatureSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomeFeatureSetting extends EditRecord
{
    protected static string $resource = HomeFeatureSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
