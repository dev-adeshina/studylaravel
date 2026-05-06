<?php

namespace App\Filament\Resources\DestinationFeaturePosts;

use App\Filament\Resources\DestinationFeaturePosts\Pages\CreateDestinationFeaturePost;
use App\Filament\Resources\DestinationFeaturePosts\Pages\EditDestinationFeaturePost;
use App\Filament\Resources\DestinationFeaturePosts\Pages\ListDestinationFeaturePosts;
use App\Filament\Resources\DestinationFeaturePosts\Schemas\DestinationFeaturePostForm;
use App\Filament\Resources\DestinationFeaturePosts\Tables\DestinationFeaturePostsTable;
use App\Models\DestinationFeaturePost;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DestinationFeaturePostResource extends Resource
{
    protected static ?string $model = DestinationFeaturePost::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'destination_feature_posts';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Destination Page';

    public static function form(Schema $schema): Schema
    {
        return DestinationFeaturePostForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DestinationFeaturePostsTable::configure($table);
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
            'index' => ListDestinationFeaturePosts::route('/'),
            'create' => CreateDestinationFeaturePost::route('/create'),
            'edit' => EditDestinationFeaturePost::route('/{record}/edit'),
        ];
    }
}
