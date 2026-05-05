<?php

namespace App\Filament\Resources\HomeFeatureTestimonials\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

// use Filament\Schemas\Components\Actions\Action;
use Filament\Actions\Action;


class HomeFeatureTestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('school')
                    ->required(),
                TextInput::make('country')
                    ->required(),
                
                // TextInput::make('stars')
                //     ->required()
                //     ->numeric()
                //     ->default(5),
                // TextInput::make('video_url')
                //     ->url(),
                Select::make('stars')
                    ->options([1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5])
                    ->default(5),
                // FileUpload::make('video_url')
                //     ->label('Testimonial Video')
                //     ->disk('cloudinary')
                //     ->directory('testimonials')
                //     ->acceptedFileTypes(['video/mp4', 'video/webm'])
                //     ->maxSize(102400) // 100MB
                //     ->nullable(),
                TextInput::make('video_url')
                    ->id('video-url-input')
                    ->label('Testimonial Video')
                    ->readonly()
                    ->hintAction(
                        Action::make('upload')
                            ->label('Upload Video')
                            ->icon('heroicon-m-video-camera')
                            ->extraAttributes([
                                'onclick' => 'openCloudinaryWidget(); return false;',
                            ])
                    )
            ]);
    }
}
