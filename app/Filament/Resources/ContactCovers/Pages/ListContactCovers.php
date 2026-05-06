<?php

namespace App\Filament\Resources\ContactCovers\Pages;

use App\Filament\Resources\ContactCovers\ContactCoverResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactCovers extends ListRecords
{
    protected static string $resource = ContactCoverResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
