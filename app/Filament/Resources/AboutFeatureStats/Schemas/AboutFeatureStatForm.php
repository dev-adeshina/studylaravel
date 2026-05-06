<?php

namespace App\Filament\Resources\AboutFeatureStats\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AboutFeatureStatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('paragraph')
                    ->required(),
            ]);
    }
}
