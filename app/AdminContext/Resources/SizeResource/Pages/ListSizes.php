<?php

namespace App\AdminContext\Resources\SizeResource\Pages;

use App\AdminContext\Resources\SizeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSizes extends ListRecords
{
    protected static string $resource = SizeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
