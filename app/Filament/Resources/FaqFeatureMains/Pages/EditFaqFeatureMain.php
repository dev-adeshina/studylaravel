<?php

namespace App\Filament\Resources\FaqFeatureMains\Pages;

use App\Filament\Resources\FaqFeatureMains\FaqFeatureMainResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFaqFeatureMain extends EditRecord
{
    protected static string $resource = FaqFeatureMainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
