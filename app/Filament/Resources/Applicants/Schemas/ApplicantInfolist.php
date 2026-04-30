<?php

namespace App\Filament\Resources\Applicants\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ApplicantInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('full_name'),
                TextEntry::make('age'),
                TextEntry::make('phone_number'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('gender'),
                TextEntry::make('preferred_study_destination'),
                TextEntry::make('other_countries_interested'),
                TextEntry::make('program_interested'),
                TextEntry::make('intake_period'),
                TextEntry::make('highest_qualification'),
                TextEntry::make('other_qualification')
                    ->placeholder('-'),
                TextEntry::make('previous_visa_refusal'),
                TextEntry::make('referral_source'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
