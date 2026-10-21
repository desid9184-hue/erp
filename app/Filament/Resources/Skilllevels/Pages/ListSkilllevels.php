<?php

namespace App\Filament\Resources\Skilllevels\Pages;

use App\Filament\Resources\Skilllevels\SkilllevelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSkilllevels extends ListRecords
{
    protected static string $resource = SkilllevelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
