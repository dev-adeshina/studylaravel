<?php

namespace App\Filament\Resources\ServiceFeatureMains\Pages;

use App\Filament\Resources\ServiceFeatureMains\ServiceFeatureMainResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServiceFeatureMain extends EditRecord
{
    protected static string $resource = ServiceFeatureMainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
