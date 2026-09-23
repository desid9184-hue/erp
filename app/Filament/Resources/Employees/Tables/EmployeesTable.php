<?php

namespace App\Filament\Resources\Employees\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EmployeesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // FOTO
                ImageColumn::make('image')
                    ->label('Photo')
                    ->disk('public')
                    ->circular()
                    ->size(80),

                // NAMA
                TextColumn::make('user.name')
                    ->label('Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                // DESCRIPTION DARI POSITION
                TextColumn::make('position.description')
                    ->label('Description')
                    ->searchable(),

                // EMAIL DARI USER
                TextColumn::make('user.email')
                    ->label('Email')
                    ->searchable(),

                // NOMOR HP
                TextColumn::make('phone_number')
                    ->label('Phone Number')
                    ->searchable(),

                // GENDER
                TextColumn::make('gender')
                    ->label('Gender')
                    ->formatStateUsing(fn ($state) => match ($state) {
                            'male' => 'Laki-laki',
                            'female' => 'Perempuan',
                            default => $state,
                        })
                    ->badge(),
                ])

            // Membuat tampilan menjadi beberapa card dalam satu baris
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
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