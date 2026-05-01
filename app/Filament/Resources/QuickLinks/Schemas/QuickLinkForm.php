<?php

namespace App\Filament\Resources\QuickLinks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class QuickLinkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('url')
                    ->url()
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
