<?php

namespace App\Filament\Resources\SectionHideSettings;

use App\Filament\Resources\SectionHideSettings\Pages\CreateSectionHideSetting;
use App\Filament\Resources\SectionHideSettings\Pages\EditSectionHideSetting;
use App\Filament\Resources\SectionHideSettings\Pages\ListSectionHideSettings;
use App\Filament\Resources\SectionHideSettings\Schemas\SectionHideSettingForm;
use App\Filament\Resources\SectionHideSettings\Tables\SectionHideSettingsTable;
use App\Models\SectionHideSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SectionHideSettingResource extends Resource
{
    protected static ?string $model = SectionHideSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'section_hide_settings';

      protected static string|\UnitEnum|null $navigationGroup = 'Editor: Sections Settings';

    public static function form(Schema $schema): Schema
    {
        return SectionHideSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SectionHideSettingsTable::configure($table);
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
            'index' => ListSectionHideSettings::route('/'),
            'create' => CreateSectionHideSetting::route('/create'),
            'edit' => EditSectionHideSetting::route('/{record}/edit'),
        ];
    }
}
