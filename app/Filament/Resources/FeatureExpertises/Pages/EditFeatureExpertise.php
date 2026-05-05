<?php

namespace App\Filament\Resources\FeatureExpertises\Pages;

use App\Filament\Resources\FeatureExpertises\FeatureExpertiseResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFeatureExpertise extends EditRecord
{
    protected static string $resource = FeatureExpertiseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
