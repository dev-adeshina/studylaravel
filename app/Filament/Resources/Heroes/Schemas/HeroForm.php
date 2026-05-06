<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class HeroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('page_key')
                    ->required(),
                TextInput::make('layout_type')
                    ->required()
                    ->default('split'),
                TextInput::make('breadcrumb'),
                Textarea::make('title')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('highlight_text'),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('image_path')
                    ->disk('cloudinary')
                    ->directory('home-destination-images')
                    ->image()
                    ->imageEditor()
                    ->live()
                    ->required()
                    ->visibility('public')
                    ->extraAttributes(['overwrite' => true])
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return (string) Str::uuid(); 
                    }),
                // FileUpload::make('image_path')
                //     ->disk('public')
                //     ->directory('hero-images')
                //     ->visibility('public')
                //     ->image(),
                TextInput::make('primary_cta_text'),
                TextInput::make('primary_cta_url'),
                    // ->url(),
                TextInput::make('secondary_cta_text'),
                TextInput::make('secondary_cta_url'),
                    // ->url(),
                Toggle::make('is_dynamic')
                    ->required(),
                TextInput::make('author_name'),
                TextInput::make('author_avatar'),
                TextInput::make('meta_info'),
            ]);
    }
}
