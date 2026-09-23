<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Department Information')
                    ->description('Please provide information about the department')
                    ->columns(2)
                    ->schema([

                        TextInput::make('name')
                            ->label('Department Name')
                            ->required(),

                        TextInput::make('description')
                            ->required(),

                        TextInput::make('address')
                            ->required(),

                        TextInput::make('email')
                            ->email()
                            ->required(),

                        TextInput::make('phone_number')
                            ->tel()
                            ->required(),

                    ]),

            ]);
    }
}