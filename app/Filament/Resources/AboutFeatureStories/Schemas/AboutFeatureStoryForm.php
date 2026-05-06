<?php

namespace App\Filament\Resources\AboutFeatureStories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class AboutFeatureStoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('eyebrow')
                    ->required()
                    ->default('Our story'),
                TextInput::make('title')
                    ->required()
                    ->default('We’re just getting started'),
                Textarea::make('body_text_one')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('body_text_two')
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
                TextInput::make('image_alt')
                    ->required(),
            ]);
    }
}
