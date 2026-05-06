<?php

namespace App\Filament\Resources\AboutFeatureInfoGraphs\Pages;

use App\Filament\Resources\AboutFeatureInfoGraphs\AboutFeatureInfoGraphResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutFeatureInfoGraph extends EditRecord
{
    protected static string $resource = AboutFeatureInfoGraphResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
