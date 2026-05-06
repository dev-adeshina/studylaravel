<?php

namespace App\Filament\Resources\ContactCovers;

use App\Filament\Resources\ContactCovers\Pages\CreateContactCover;
use App\Filament\Resources\ContactCovers\Pages\EditContactCover;
use App\Filament\Resources\ContactCovers\Pages\ListContactCovers;
use App\Filament\Resources\ContactCovers\Schemas\ContactCoverForm;
use App\Filament\Resources\ContactCovers\Tables\ContactCoversTable;
use App\Models\ContactCover;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactCoverResource extends Resource
{
    protected static ?string $model = ContactCover::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'contact_covers';

    protected static string|\UnitEnum|null $navigationGroup = 'Editor: Contact Page';

    public static function form(Schema $schema): Schema
    {
        return ContactCoverForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactCoversTable::configure($table);
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
            'index' => ListContactCovers::route('/'),
            'create' => CreateContactCover::route('/create'),
            'edit' => EditContactCover::route('/{record}/edit'),
        ];
    }
}
