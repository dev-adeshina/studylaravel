<?php

namespace App\Filament\Resources\FeatureExpertises;

use App\Filament\Resources\FeatureExpertises\Pages\CreateFeatureExpertise;
use App\Filament\Resources\FeatureExpertises\Pages\EditFeatureExpertise;
use App\Filament\Resources\FeatureExpertises\Pages\ListFeatureExpertises;
use App\Filament\Resources\FeatureExpertises\Schemas\FeatureExpertiseForm;
use App\Filament\Resources\FeatureExpertises\Tables\FeatureExpertisesTable;
use App\Models\FeatureExpertise;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FeatureExpertiseResource extends Resource
{
    protected static ?string $model = FeatureExpertise::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'feature_expertises';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Home Page';

    public static function form(Schema $schema): Schema
    {
        return FeatureExpertiseForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FeatureExpertisesTable::configure($table);
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
            'index' => ListFeatureExpertises::route('/'),
            'create' => CreateFeatureExpertise::route('/create'),
            'edit' => EditFeatureExpertise::route('/{record}/edit'),
        ];
    }
}
