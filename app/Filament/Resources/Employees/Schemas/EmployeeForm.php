<?php

namespace App\Filament\Resources\Employees\Schemas;

use App\Models\Position;
use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // FOTO
                FileUpload::make('image')
                    ->label('Employee Photo')
                    ->image()
                    ->disk('public')
                    ->directory('employees')
                    ->imageEditor()
                    ->required(),

                // USER ID
                TextInput::make('user_id')
                    ->label('User ID')
                    ->required()
                    ->numeric(),

                // POSITION ID
                TextInput::make('position_id')
                    ->label('Position ID')
                    ->required()
                    ->numeric(),

                // DEPARTMENT ID
                TextInput::make('department_id')
                    ->label('Department ID')
                    ->required()
                    ->numeric(),

                // NOMOR HP
                TextInput::make('phone_number')
                    ->label('Phone Number')
                    ->tel()
                    ->required(),

                // GENDER
                Select::make('gender')
                    ->label('Gender')
                    ->options([
                        'male' => 'Laki-laki',
                        'female' => 'Perempuan',
                ])
                ->required(),

                // FIELD LAIN DARI DATABASE
                TextInput::make('address')
                    ->default('-')
                    ->hidden(),

                TextInput::make('pob')
                    ->default('-')
                    ->hidden(),

                TextInput::make('religion')
                    ->default('islam')
                    ->hidden(),

                TextInput::make('salary')
                    ->numeric()
                    ->default(0)
                    ->hidden(),

                TextInput::make('start_date')
                    ->default(now()->format('Y-m-d'))
                    ->hidden(),

                Select::make('status')
                    ->options([
                        'applicant' => 'Applicant',
                        'active' => 'Active',
                        'trainee' => 'Trainee',
                        'x' => 'Inactive',
                    ])
                    ->default('active')
                    ->hidden(),
            ]);
    }
}