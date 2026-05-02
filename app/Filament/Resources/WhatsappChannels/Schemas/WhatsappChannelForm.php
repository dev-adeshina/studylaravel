<?php

namespace App\Filament\Resources\WhatsappChannels\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class WhatsappChannelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('heading')
                    ->required(),
                Textarea::make('sub_heading')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('representative')
                    ->required(),
                TextInput::make('welcome_message')
                    ->required(),
                TextInput::make('phone_number')
                    ->tel()
                    ->required(),
                TextInput::make('call_to_action')
                    ->required(),
            ]);
    }
}
