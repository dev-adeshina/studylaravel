<?php

namespace App\Filament\Resources\HomeFeatureSettings;

use App\Filament\Resources\HomeFeatureSettings\Pages\CreateHomeFeatureSetting;
use App\Filament\Resources\HomeFeatureSettings\Pages\EditHomeFeatureSetting;
use App\Filament\Resources\HomeFeatureSettings\Pages\ListHomeFeatureSettings;
use App\Filament\Resources\HomeFeatureSettings\Schemas\HomeFeatureSettingForm;
use App\Filament\Resources\HomeFeatureSettings\Tables\HomeFeatureSettingsTable;
use App\Models\HomeFeatureSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomeFeatureSettingResource extends Resource
{
    protected static ?string $model = HomeFeatureSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'home_feature_settings';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Home Page';

    public static function form(Schema $schema): Schema
    {
        return HomeFeatureSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeFeatureSettingsTable::configure($table);
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
            'index' => ListHomeFeatureSettings::route('/'),
            'create' => CreateHomeFeatureSetting::route('/create'),
            'edit' => EditHomeFeatureSetting::route('/{record}/edit'),
        ];
    }
}
