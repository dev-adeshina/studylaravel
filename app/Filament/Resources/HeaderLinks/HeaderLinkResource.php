<?php

namespace App\Filament\Resources\HeaderLinks;

use App\Filament\Resources\HeaderLinks\Pages\CreateHeaderLink;
use App\Filament\Resources\HeaderLinks\Pages\EditHeaderLink;
use App\Filament\Resources\HeaderLinks\Pages\ListHeaderLinks;
use App\Filament\Resources\HeaderLinks\Schemas\HeaderLinkForm;
use App\Filament\Resources\HeaderLinks\Tables\HeaderLinksTable;
use App\Models\HeaderLink;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class HeaderLinkResource extends Resource
{
    protected static ?string $model = HeaderLink::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'header_links';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Header Management';

    public static function form(Schema $schema): Schema
    {
        // return HeaderLinkForm::configure($schema);

        return $schema
        ->components([
            // Changed 'name' to 'label' to match your migration
            TextInput::make('label')
                ->required()
                ->maxLength(255),

            // Matches 'url' in migration
            TextInput::make('url')
                ->label('Link Destination')
                ->placeholder('e.g., /about or contact_us')
                ->required(),
            
            // Changed 'sort_order' to 'sort' to match your migration
            TextInput::make('sort')
                ->label('Sort Order')
                ->numeric()
                ->default(0),

            // Added toggle for 'is_active' since it's in your migration
            Toggle::make('is_active')
                ->label('Visible in Header')
                ->default(true),

            // Added toggle for 'is_external' to handle external links
            Toggle::make('is_external')
                ->label('Open in New Tab')
                ->default(false),
        ]);
    }

    public static function table(Table $table): Table
    {
        return HeaderLinksTable::configure($table);
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
            'index' => ListHeaderLinks::route('/'),
            'create' => CreateHeaderLink::route('/create'),
            'edit' => EditHeaderLink::route('/{record}/edit'),
        ];
    }
}
