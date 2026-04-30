<?php

namespace App\Filament\Resources\Applicants\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ApplicantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->required(),
                TextInput::make('age')
                    ->required(),
                TextInput::make('phone_number')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('gender')
                    ->required(),
                TextInput::make('preferred_study_destination')
                    ->required(),
                TextInput::make('other_countries_interested')
                    ->required(),
                TextInput::make('program_interested')
                    ->required(),
                TextInput::make('intake_period')
                    ->required(),
                TextInput::make('highest_qualification')
                    ->required(),
                TextInput::make('other_qualification'),
                TextInput::make('previous_visa_refusal')
                    ->required(),
                TextInput::make('referral_source')
                    ->required(),
            ]);
    }
}
