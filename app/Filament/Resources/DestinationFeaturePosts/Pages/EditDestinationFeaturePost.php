<?php

namespace App\Filament\Resources\DestinationFeaturePosts\Pages;

use App\Filament\Resources\DestinationFeaturePosts\DestinationFeaturePostResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDestinationFeaturePost extends EditRecord
{
    protected static string $resource = DestinationFeaturePostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
