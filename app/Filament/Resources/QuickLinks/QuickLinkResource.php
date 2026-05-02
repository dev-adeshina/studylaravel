<?php

namespace App\Filament\Resources\QuickLinks;

use App\Filament\Resources\QuickLinks\Pages\CreateQuickLink;
use App\Filament\Resources\QuickLinks\Pages\EditQuickLink;
use App\Filament\Resources\QuickLinks\Pages\ListQuickLinks;
use App\Filament\Resources\QuickLinks\Schemas\QuickLinkForm;
use App\Filament\Resources\QuickLinks\Tables\QuickLinksTable;
use App\Models\QuickLink;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;

class QuickLinkResource extends Resource
{
    protected static ?string $model = QuickLink::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'quick_links';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Footer Management';

    public static function form(Schema $schema): Schema
    {
        // return QuickLinkForm::configure($schema);

        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                TextInput::make('url')
                    ->label('Link Destination')
                    // DO NOT use ->url() here if you want to support /about or route names
                    ->placeholder('e.g., /about or contact_us')
                    ->required(),
                
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return QuickLinksTable::configure($table);
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
            'index' => ListQuickLinks::route('/'),
            'create' => CreateQuickLink::route('/create'),
            'edit' => EditQuickLink::route('/{record}/edit'),
        ];
    }
}
