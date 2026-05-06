<?php

namespace App\Filament\Resources\AboutFeatureStories\Pages;

use App\Filament\Resources\AboutFeatureStories\AboutFeatureStoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutFeatureStory extends EditRecord
{
    protected static string $resource = AboutFeatureStoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
