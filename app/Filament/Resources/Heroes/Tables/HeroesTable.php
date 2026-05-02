<?php

namespace App\Filament\Resources\Heroes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_key')
                    ->searchable(),
                TextColumn::make('layout_type')
                    ->searchable(),
                TextColumn::make('breadcrumb')
                    ->searchable(),
                TextColumn::make('highlight_text')
                    ->searchable(),
                ImageColumn::make('image_path'),
                TextColumn::make('primary_cta_text')
                    ->searchable(),
                TextColumn::make('primary_cta_url')
                    ->searchable(),
                TextColumn::make('secondary_cta_text')
                    ->searchable(),
                TextColumn::make('secondary_cta_url')
                    ->searchable(),
                IconColumn::make('is_dynamic')
                    ->boolean(),
                TextColumn::make('author_name')
                    ->searchable(),
                TextColumn::make('author_avatar')
                    ->searchable(),
                TextColumn::make('meta_info')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
