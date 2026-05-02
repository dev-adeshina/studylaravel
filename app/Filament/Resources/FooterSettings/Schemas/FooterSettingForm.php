<?php

namespace App\Filament\Resources\FooterSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FooterSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('slogan')
                    ->columnSpanFull(),
                TextInput::make('newsletter_title'),
                Textarea::make('newsletter_description')
                    ->columnSpanFull(),
                TextInput::make('copyright_text'),
                TextInput::make('designer_name'),
                TextInput::make('designer_url')
                    ->url(),
            ]);
    }
}
