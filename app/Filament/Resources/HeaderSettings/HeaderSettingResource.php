<?php

namespace App\Filament\Resources\HeaderSettings;

use App\Filament\Resources\HeaderSettings\Pages\CreateHeaderSetting;
use App\Filament\Resources\HeaderSettings\Pages\EditHeaderSetting;
use App\Filament\Resources\HeaderSettings\Pages\ListHeaderSettings;
use App\Filament\Resources\HeaderSettings\Schemas\HeaderSettingForm;
use App\Filament\Resources\HeaderSettings\Tables\HeaderSettingsTable;
use App\Models\HeaderSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;;

class HeaderSettingResource extends Resource
{
    protected static ?string $model = HeaderSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'header_settings';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Header Management';

    public static function form(Schema $schema): Schema
    {
        // return HeaderSettingForm::configure($schema);
        return $schema
            ->components([
                Section::make('Header Call to Action')
                    ->description('Manage the CTA button in the website header')
                    ->schema([
                        TextInput::make('cta')
                            ->label('Button Text')
                            ->placeholder('e.g., Get Started'),

                        TextInput::make('cta_url')
                            ->label('Button Link/Route')
                            ->placeholder('e.g., register or /apply'),

                        TextInput::make('cta_to_area')
                            ->label('Scroll To (Section ID)')
                            ->placeholder('e.g., #contact-form'),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return HeaderSettingsTable::configure($table);
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
            'index' => ListHeaderSettings::route('/'),
            'create' => CreateHeaderSetting::route('/create'),
            'edit' => EditHeaderSetting::route('/{record}/edit'),
        ];
    }
}
