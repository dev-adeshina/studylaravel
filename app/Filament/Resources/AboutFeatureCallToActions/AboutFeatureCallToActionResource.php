<?php

namespace App\Filament\Resources\AboutFeatureCallToActions;

use App\Filament\Resources\AboutFeatureCallToActions\Pages\CreateAboutFeatureCallToAction;
use App\Filament\Resources\AboutFeatureCallToActions\Pages\EditAboutFeatureCallToAction;
use App\Filament\Resources\AboutFeatureCallToActions\Pages\ListAboutFeatureCallToActions;
use App\Filament\Resources\AboutFeatureCallToActions\Schemas\AboutFeatureCallToActionForm;
use App\Filament\Resources\AboutFeatureCallToActions\Tables\AboutFeatureCallToActionsTable;
use App\Models\AboutFeatureCallToAction;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutFeatureCallToActionResource extends Resource
{
    protected static ?string $model = AboutFeatureCallToAction::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'about_feature_call_to_actions';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: About Page';

    public static function form(Schema $schema): Schema
    {
        return AboutFeatureCallToActionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutFeatureCallToActionsTable::configure($table);
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
            'index' => ListAboutFeatureCallToActions::route('/'),
            'create' => CreateAboutFeatureCallToAction::route('/create'),
            'edit' => EditAboutFeatureCallToAction::route('/{record}/edit'),
        ];
    }
}
