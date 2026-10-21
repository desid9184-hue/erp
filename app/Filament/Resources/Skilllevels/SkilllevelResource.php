<?php

namespace App\Filament\Resources\Skilllevels;

use App\Filament\Resources\Skilllevels\Pages\CreateSkilllevel;
use App\Filament\Resources\Skilllevels\Pages\EditSkilllevel;
use App\Filament\Resources\Skilllevels\Pages\ListSkilllevels;
use App\Filament\Resources\Skilllevels\Schemas\SkilllevelForm;
use App\Filament\Resources\Skilllevels\Tables\SkilllevelsTable;
use App\Models\Skilllevel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SkilllevelResource extends Resource
{
    protected static ?string $model = Skilllevel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationParentItem = 'Employee Skills';

    protected static string|UnitEnum|null $navigationGroup = 'Human Resource';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return SkilllevelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SkilllevelsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSkilllevels::route('/'),
            'create' => CreateSkilllevel::route('/create'),
            'edit' => EditSkilllevel::route('/{record}/edit'),
        ];
    }
}
