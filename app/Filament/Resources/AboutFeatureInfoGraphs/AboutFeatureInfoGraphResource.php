<?php

namespace App\Filament\Resources\AboutFeatureInfoGraphs;

use App\Filament\Resources\AboutFeatureInfoGraphs\Pages\CreateAboutFeatureInfoGraph;
use App\Filament\Resources\AboutFeatureInfoGraphs\Pages\EditAboutFeatureInfoGraph;
use App\Filament\Resources\AboutFeatureInfoGraphs\Pages\ListAboutFeatureInfoGraphs;
use App\Filament\Resources\AboutFeatureInfoGraphs\Schemas\AboutFeatureInfoGraphForm;
use App\Filament\Resources\AboutFeatureInfoGraphs\Tables\AboutFeatureInfoGraphsTable;
use App\Models\AboutFeatureInfoGraph;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutFeatureInfoGraphResource extends Resource
{
    protected static ?string $model = AboutFeatureInfoGraph::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'about_feature_info_graphs';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: About Page';

    public static function form(Schema $schema): Schema
    {
        return AboutFeatureInfoGraphForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutFeatureInfoGraphsTable::configure($table);
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
            'index' => ListAboutFeatureInfoGraphs::route('/'),
            'create' => CreateAboutFeatureInfoGraph::route('/create'),
            'edit' => EditAboutFeatureInfoGraph::route('/{record}/edit'),
        ];
    }
}
