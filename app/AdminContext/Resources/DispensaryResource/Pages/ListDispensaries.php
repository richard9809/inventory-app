<?php

namespace App\AdminContext\Resources\DispensaryResource\Pages;

use App\AdminContext\Resources\DispensaryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDispensaries extends ListRecords
{
    protected static string $resource = DispensaryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
