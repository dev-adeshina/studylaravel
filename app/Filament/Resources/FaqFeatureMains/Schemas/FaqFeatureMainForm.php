<?php

namespace App\Filament\Resources\FaqFeatureMains\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;

class FaqFeatureMainForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                RichEditor::make('content')
                    ->label('Content')
                    ->required()
                    ->placeholder('Enter your content here...')
                    ->extraInputAttributes(['style' => 'min-height: 300px;'])
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                
            ]);
    }
}
