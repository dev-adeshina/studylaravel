<?php

namespace App\Filament\Resources\HeaderSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HeaderSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('cta'),
                TextInput::make('cta_url')
                    ->url(),
                TextInput::make('cta_to_area'),
            ]);
    }
}
