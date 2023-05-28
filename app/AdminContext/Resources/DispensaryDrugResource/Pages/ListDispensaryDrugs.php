<?php

namespace App\AdminContext\Resources\DispensaryDrugResource\Pages;

use App\AdminContext\Resources\DispensaryDrugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDispensaryDrugs extends ListRecords
{
    protected static string $resource = DispensaryDrugResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
