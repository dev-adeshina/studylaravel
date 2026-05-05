<?php

namespace App\Filament\Resources\SectionHideSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SectionHideSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->required(),
                Toggle::make('is_visible')
                    ->required(),
            ]);
    }
}
