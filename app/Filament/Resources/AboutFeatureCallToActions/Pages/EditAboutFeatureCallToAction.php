<?php

namespace App\Filament\Resources\AboutFeatureCallToActions\Pages;

use App\Filament\Resources\AboutFeatureCallToActions\AboutFeatureCallToActionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutFeatureCallToAction extends EditRecord
{
    protected static string $resource = AboutFeatureCallToActionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
