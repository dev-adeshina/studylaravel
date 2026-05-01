<?php

namespace App\Filament\Resources\FooterContacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FooterContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('office_address')
                    ->columnSpanFull(),
                TextInput::make('phone_number')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
            ]);
    }
}
