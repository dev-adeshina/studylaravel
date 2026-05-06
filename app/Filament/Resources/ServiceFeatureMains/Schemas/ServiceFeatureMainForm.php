<?php

namespace App\Filament\Resources\ServiceFeatureMains\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ServiceFeatureMainForm
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
                // FileUpload::make('image_path')
                //     ->image()
                //     ->required(),
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
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
