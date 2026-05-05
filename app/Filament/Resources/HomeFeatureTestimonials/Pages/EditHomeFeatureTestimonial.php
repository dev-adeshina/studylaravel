<?php

namespace App\Filament\Resources\HomeFeatureTestimonials\Pages;

use App\Filament\Resources\HomeFeatureTestimonials\HomeFeatureTestimonialResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomeFeatureTestimonial extends EditRecord
{
    protected static string $resource = HomeFeatureTestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
