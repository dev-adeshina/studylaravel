<?php

namespace App\Filament\Resources\ServiceFeatureMains;

use App\Filament\Resources\ServiceFeatureMains\Pages\CreateServiceFeatureMain;
use App\Filament\Resources\ServiceFeatureMains\Pages\EditServiceFeatureMain;
use App\Filament\Resources\ServiceFeatureMains\Pages\ListServiceFeatureMains;
use App\Filament\Resources\ServiceFeatureMains\Schemas\ServiceFeatureMainForm;
use App\Filament\Resources\ServiceFeatureMains\Tables\ServiceFeatureMainsTable;
use App\Models\ServiceFeatureMain;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServiceFeatureMainResource extends Resource
{
    protected static ?string $model = ServiceFeatureMain::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'service_feature_mains';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Service Page';

    public static function form(Schema $schema): Schema
    {
        return ServiceFeatureMainForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServiceFeatureMainsTable::configure($table);
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
            'index' => ListServiceFeatureMains::route('/'),
            'create' => CreateServiceFeatureMain::route('/create'),
            'edit' => EditServiceFeatureMain::route('/{record}/edit'),
        ];
    }
}
