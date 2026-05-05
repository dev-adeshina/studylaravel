<?php

namespace App\Filament\Resources\HomeFeatureDestinations;

use App\Filament\Resources\HomeFeatureDestinations\Pages\CreateHomeFeatureDestination;
use App\Filament\Resources\HomeFeatureDestinations\Pages\EditHomeFeatureDestination;
use App\Filament\Resources\HomeFeatureDestinations\Pages\ListHomeFeatureDestinations;
use App\Filament\Resources\HomeFeatureDestinations\Schemas\HomeFeatureDestinationForm;
use App\Filament\Resources\HomeFeatureDestinations\Tables\HomeFeatureDestinationsTable;
use App\Models\HomeFeatureDestination;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomeFeatureDestinationResource extends Resource
{
    protected static ?string $model = HomeFeatureDestination::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'home_feature_destinations';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Home Page';

    public static function form(Schema $schema): Schema
    {
        return HomeFeatureDestinationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeFeatureDestinationsTable::configure($table);
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
            'index' => ListHomeFeatureDestinations::route('/'),
            'create' => CreateHomeFeatureDestination::route('/create'),
            'edit' => EditHomeFeatureDestination::route('/{record}/edit'),
        ];
    }
}
