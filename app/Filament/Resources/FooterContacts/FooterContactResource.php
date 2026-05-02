<?php

namespace App\Filament\Resources\FooterContacts;

use App\Filament\Resources\FooterContacts\Pages\CreateFooterContact;
use App\Filament\Resources\FooterContacts\Pages\EditFooterContact;
use App\Filament\Resources\FooterContacts\Pages\ListFooterContacts;
use App\Filament\Resources\FooterContacts\Schemas\FooterContactForm;
use App\Filament\Resources\FooterContacts\Tables\FooterContactsTable;
use App\Models\FooterContact;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FooterContactResource extends Resource
{
    protected static ?string $model = FooterContact::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'footer_contacts';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Footer Management';

    public static function form(Schema $schema): Schema
    {
        return FooterContactForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FooterContactsTable::configure($table);
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
            'index' => ListFooterContacts::route('/'),
            'create' => CreateFooterContact::route('/create'),
            'edit' => EditFooterContact::route('/{record}/edit'),
        ];
    }
}
