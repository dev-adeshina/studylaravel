<?php

namespace App\Filament\Resources\FeatureExpertises\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

use Filament\Forms\Components\Select;
use Illuminate\Support\HtmlString;

class FeatureExpertiseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Select::make('icon_class')
                    ->label('Select Icon')
                    ->required()
                    ->options([
                        'fa-solid fa-building-columns' => 'University',
                        'fa-regular fa-file-lines' => 'Application',
                        'fa-solid fa-money-bill-wave' => 'Finance',
                        'fa-solid fa-plane-departure' => 'Visa',
                        'fa-solid fa-house' => 'Housing',
                        'fa-solid fa-briefcase' => 'Scholarships',
                        'fa-solid fa-handshake' => 'Interviews',
                        'fa-solid fa-plane' => 'Travel',
                    ])
                    ->searchable()
                    ->preload()
                    ->required()
                    // This is the "Magic": it shows the actual icon in the dropdown
                    ->allowHtml()
                    ->default('fa-solid fa-star'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_visible')
                    ->required(),
            ]);
    }
}
