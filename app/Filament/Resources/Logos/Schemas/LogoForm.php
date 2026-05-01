<?php

namespace App\Filament\Resources\Logos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class LogoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('header'),
                Textarea::make('header_path')
                    ->columnSpanFull(),
                TextInput::make('main'),
                Textarea::make('main_path')
                    ->columnSpanFull(),
                TextInput::make('footer'),
                Textarea::make('footer_path')
                    ->columnSpanFull(),
            ]);
    }
}
