<?php

namespace App\Filament\Resources\FooterContacts\Pages;

use App\Filament\Resources\FooterContacts\FooterContactResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFooterContact extends EditRecord
{
    protected static string $resource = FooterContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
