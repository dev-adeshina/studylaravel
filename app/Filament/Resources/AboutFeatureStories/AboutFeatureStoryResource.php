<?php

namespace App\Filament\Resources\AboutFeatureStories;

use App\Filament\Resources\AboutFeatureStories\Pages\CreateAboutFeatureStory;
use App\Filament\Resources\AboutFeatureStories\Pages\EditAboutFeatureStory;
use App\Filament\Resources\AboutFeatureStories\Pages\ListAboutFeatureStories;
use App\Filament\Resources\AboutFeatureStories\Schemas\AboutFeatureStoryForm;
use App\Filament\Resources\AboutFeatureStories\Tables\AboutFeatureStoriesTable;
use App\Models\AboutFeatureStory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutFeatureStoryResource extends Resource
{
    protected static ?string $model = AboutFeatureStory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'about_feature_stories';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: About Page';

    public static function form(Schema $schema): Schema
    {
        return AboutFeatureStoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutFeatureStoriesTable::configure($table);
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
            'index' => ListAboutFeatureStories::route('/'),
            'create' => CreateAboutFeatureStory::route('/create'),
            'edit' => EditAboutFeatureStory::route('/{record}/edit'),
        ];
    }
}
