<?php

namespace App\Filament\Resources\Logos;

use App\Filament\Resources\Logos\Pages\CreateLogo;
use App\Filament\Resources\Logos\Pages\EditLogo;
use App\Filament\Resources\Logos\Pages\ListLogos;
use App\Filament\Resources\Logos\Schemas\LogoForm;
use App\Filament\Resources\Logos\Tables\LogosTable;
use App\Models\Logo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LogoResource extends Resource
{
    protected static ?string $model = Logo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'logos';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Logo Management';

    public static function form(Schema $schema): Schema
    {
        return LogoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LogosTable::configure($table);
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
            'index' => ListLogos::route('/'),
            'create' => CreateLogo::route('/create'),
            'edit' => EditLogo::route('/{record}/edit'),
        ];
    }
}
