<?php

namespace App\Filament\Resources\SectionHideSettings\Pages;

use App\Filament\Resources\SectionHideSettings\SectionHideSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSectionHideSetting extends EditRecord
{
    protected static string $resource = SectionHideSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
