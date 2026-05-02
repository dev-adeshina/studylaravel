<?php

namespace App\Filament\Resources\HeaderLinks\Pages;

use App\Filament\Resources\HeaderLinks\HeaderLinkResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHeaderLink extends EditRecord
{
    protected static string $resource = HeaderLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
