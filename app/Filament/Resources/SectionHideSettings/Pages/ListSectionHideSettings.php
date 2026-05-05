<?php

namespace App\Filament\Resources\SectionHideSettings\Pages;

use App\Filament\Resources\SectionHideSettings\SectionHideSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSectionHideSettings extends ListRecords
{
    protected static string $resource = SectionHideSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
