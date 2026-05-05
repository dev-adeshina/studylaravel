<?php

namespace App\Filament\Resources\HomeFeatureTestimonials;

use App\Filament\Resources\HomeFeatureTestimonials\Pages\CreateHomeFeatureTestimonial;
use App\Filament\Resources\HomeFeatureTestimonials\Pages\EditHomeFeatureTestimonial;
use App\Filament\Resources\HomeFeatureTestimonials\Pages\ListHomeFeatureTestimonials;
use App\Filament\Resources\HomeFeatureTestimonials\Schemas\HomeFeatureTestimonialForm;
use App\Filament\Resources\HomeFeatureTestimonials\Tables\HomeFeatureTestimonialsTable;
use App\Models\HomeFeatureTestimonial;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomeFeatureTestimonialResource extends Resource
{
    protected static ?string $model = HomeFeatureTestimonial::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'home_feature_testimonials';
    

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Home Page';

    public static function form(Schema $schema): Schema
    {
        return HomeFeatureTestimonialForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeFeatureTestimonialsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHomeFeatureTestimonials::route('/'),
            'create' => CreateHomeFeatureTestimonial::route('/create'),
            'edit' => EditHomeFeatureTestimonial::route('/{record}/edit'),
        ];
    }
}
