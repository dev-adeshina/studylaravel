<?php

namespace App\Filament\Resources\FooterContacts\Pages;

use App\Filament\Resources\FooterContacts\FooterContactResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFooterContacts extends ListRecords
{
    protected static string $resource = FooterContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }
}
