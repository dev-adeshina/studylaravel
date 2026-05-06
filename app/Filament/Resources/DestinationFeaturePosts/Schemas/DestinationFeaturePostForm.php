<?php

namespace App\Filament\Resources\DestinationFeaturePosts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class DestinationFeaturePostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required(),
                TextInput::make('title')
                    ->required(),
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
                // Textarea::make('intro_text')
                //     ->required()
                //     ->columnSpanFull(),
                RichEditor::make('intro_text')
                    ->label('Content')
                    ->required()
                    ->placeholder('Enter your content here...')
                    ->extraInputAttributes(['style' => 'min-height: 300px;'])
                    ->columnSpanFull(),
                // Textarea::make('schools_list')
                //     ->required()
                //     ->columnSpanFull(),
                RichEditor::make('schools_list')
                    ->label('Content')
                    ->required()
                    ->placeholder('Enter your content here...')
                    ->extraInputAttributes(['style' => 'min-height: 300px;'])
                    ->columnSpanFull(),
                TextInput::make('cta_label')
                    ->required()
                    ->default('Apply Now'),
                TextInput::make('cta_route')
                    ->required()
                    ->default('applicants'),
            ]);
    }
}
