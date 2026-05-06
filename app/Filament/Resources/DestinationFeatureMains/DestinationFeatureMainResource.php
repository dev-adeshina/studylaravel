<?php

namespace App\Filament\Resources\DestinationFeatureMains;

use App\Filament\Resources\DestinationFeatureMains\Pages\CreateDestinationFeatureMain;
use App\Filament\Resources\DestinationFeatureMains\Pages\EditDestinationFeatureMain;
use App\Filament\Resources\DestinationFeatureMains\Pages\ListDestinationFeatureMains;
use App\Filament\Resources\DestinationFeatureMains\Schemas\DestinationFeatureMainForm;
use App\Filament\Resources\DestinationFeatureMains\Tables\DestinationFeatureMainsTable;
use App\Models\DestinationFeatureMain;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DestinationFeatureMainResource extends Resource
{
    protected static ?string $model = DestinationFeatureMain::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'destination_feature_mains';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Destination Page';

    public static function form(Schema $schema): Schema
    {
        return DestinationFeatureMainForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DestinationFeatureMainsTable::configure($table);
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
            'index' => ListDestinationFeatureMains::route('/'),
            'create' => CreateDestinationFeatureMain::route('/create'),
            'edit' => EditDestinationFeatureMain::route('/{record}/edit'),
        ];
    }
}
