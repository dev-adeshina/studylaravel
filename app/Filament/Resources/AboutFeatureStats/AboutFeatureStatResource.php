<?php

namespace App\Filament\Resources\AboutFeatureStats;

use App\Filament\Resources\AboutFeatureStats\Pages\CreateAboutFeatureStat;
use App\Filament\Resources\AboutFeatureStats\Pages\EditAboutFeatureStat;
use App\Filament\Resources\AboutFeatureStats\Pages\ListAboutFeatureStats;
use App\Filament\Resources\AboutFeatureStats\Schemas\AboutFeatureStatForm;
use App\Filament\Resources\AboutFeatureStats\Tables\AboutFeatureStatsTable;
use App\Models\AboutFeatureStat;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutFeatureStatResource extends Resource
{
    protected static ?string $model = AboutFeatureStat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'about_feature_stats';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: About Page';

    public static function form(Schema $schema): Schema
    {
        return AboutFeatureStatForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutFeatureStatsTable::configure($table);
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
            'index' => ListAboutFeatureStats::route('/'),
            'create' => CreateAboutFeatureStat::route('/create'),
            'edit' => EditAboutFeatureStat::route('/{record}/edit'),
        ];
    }
}
