<?php

namespace App\Filament\Resources\HomeFeatureSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HomeFeatureSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('section_key')
                    ->required(),
                TextInput::make('eyebrow'),
                TextInput::make('title'),
            ]);
    }
}
