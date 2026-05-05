<?php

namespace App\Filament\Resources\HomeFeatureApplications;

use App\Filament\Resources\HomeFeatureApplications\Pages\CreateHomeFeatureApplication;
use App\Filament\Resources\HomeFeatureApplications\Pages\EditHomeFeatureApplication;
use App\Filament\Resources\HomeFeatureApplications\Pages\ListHomeFeatureApplications;
use App\Filament\Resources\HomeFeatureApplications\Schemas\HomeFeatureApplicationForm;
use App\Filament\Resources\HomeFeatureApplications\Tables\HomeFeatureApplicationsTable;
use App\Models\HomeFeatureApplication;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomeFeatureApplicationResource extends Resource
{
    protected static ?string $model = HomeFeatureApplication::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'home_feature_applications';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Home Page';

    public static function form(Schema $schema): Schema
    {
        return HomeFeatureApplicationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeFeatureApplicationsTable::configure($table);
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
            'index' => ListHomeFeatureApplications::route('/'),
            'create' => CreateHomeFeatureApplication::route('/create'),
            'edit' => EditHomeFeatureApplication::route('/{record}/edit'),
        ];
    }
}
