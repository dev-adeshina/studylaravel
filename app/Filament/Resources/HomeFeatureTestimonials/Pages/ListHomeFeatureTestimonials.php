<?php

namespace App\Filament\Resources\HomeFeatureTestimonials\Pages;

use App\Filament\Resources\HomeFeatureTestimonials\HomeFeatureTestimonialResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeFeatureTestimonials extends ListRecords
{
    protected static string $resource = HomeFeatureTestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
