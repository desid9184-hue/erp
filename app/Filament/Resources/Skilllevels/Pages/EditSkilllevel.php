<?php

namespace App\Filament\Resources\Skilllevels\Pages;

use App\Filament\Resources\Skilllevels\SkilllevelResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSkilllevel extends EditRecord
{
    protected static string $resource = SkilllevelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
