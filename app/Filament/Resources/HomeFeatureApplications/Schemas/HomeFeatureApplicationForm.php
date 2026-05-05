<?php

namespace App\Filament\Resources\HomeFeatureApplications\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class HomeFeatureApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
                FileUpload::make('image_alt')
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
                Toggle::make('show_form')
                    ->required(),
                TextInput::make('form_type')
                    ->required()
                    ->default('applicant-form'),
            ]);
    }
}
