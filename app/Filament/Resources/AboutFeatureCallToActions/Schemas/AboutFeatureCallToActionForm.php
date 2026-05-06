<?php

namespace App\Filament\Resources\AboutFeatureCallToActions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AboutFeatureCallToActionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('button_text')
                    ->required(),
                TextInput::make('button_link')
                    ->required(),
            ]);
    }
}
