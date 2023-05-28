<?php

namespace App\AdminContext\Resources\DrugResource\Pages;

use App\AdminContext\Resources\DrugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDrugs extends ListRecords
{
    protected static string $resource = DrugResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
