<?php

namespace App\Filament\Resources\FaqFeatureMains;

use App\Filament\Resources\FaqFeatureMains\Pages\CreateFaqFeatureMain;
use App\Filament\Resources\FaqFeatureMains\Pages\EditFaqFeatureMain;
use App\Filament\Resources\FaqFeatureMains\Pages\ListFaqFeatureMains;
use App\Filament\Resources\FaqFeatureMains\Schemas\FaqFeatureMainForm;
use App\Filament\Resources\FaqFeatureMains\Tables\FaqFeatureMainsTable;
use App\Models\FaqFeatureMain;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FaqFeatureMainResource extends Resource
{
    protected static ?string $model = FaqFeatureMain::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'faq_feature_mains';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Faq Page';

    public static function form(Schema $schema): Schema
    {
        return FaqFeatureMainForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FaqFeatureMainsTable::configure($table);
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
            'index' => ListFaqFeatureMains::route('/'),
            'create' => CreateFaqFeatureMain::route('/create'),
            'edit' => EditFaqFeatureMain::route('/{record}/edit'),
        ];
    }
}
