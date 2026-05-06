<?php

namespace App\Filament\Resources\ContactCovers\Pages;

use App\Filament\Resources\ContactCovers\ContactCoverResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditContactCover extends EditRecord
{
    protected static string $resource = ContactCoverResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
