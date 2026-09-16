<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                
                Section::make('Company Information')
                    ->description('Please provide an information of your company')
                    ->columns(2)
                    ->columnSpan(2)
                    ->schema([

                        TextInput::make('name')
                            ->required(),

                        TextInput::make('address')
                            ->required(),

                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),

                        TextInput::make('phone_number')
                            ->tel()
                            ->required(),
                    ]),

                Section::make('Company Logo')
                    ->description('Please upload a logo of your company')
                    ->schema([

                        FileUpload::make('logo')
                            ->image()
                            ->disk('public')
                            ->directory('logos')
                            ->visibility('public'),
                    ]),
            ])
            ->columns(3);
    }
}