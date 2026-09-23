<?php

namespace App\Filament\Resources\Attendances\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class AttendanceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('employee_id')
                    ->relationship('employee', 'id')
                    ->required(),
                DatePicker::make('date')
                    ->required(),
                TimePicker::make('time_in'),
                TimePicker::make('time_out'),
                TextInput::make('status')
                    ->required()
                    ->default('hadir'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
