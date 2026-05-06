<?php

namespace App\Filament\Resources\AboutFeatureStats\Pages;

use App\Filament\Resources\AboutFeatureStats\AboutFeatureStatResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutFeatureStat extends EditRecord
{
    protected static string $resource = AboutFeatureStatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
