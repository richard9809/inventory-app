<?php

namespace App\AdminContext\Resources\HospitalDrugResource\Pages;

use App\AdminContext\Resources\HospitalDrugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHospitalDrugs extends ListRecords
{
    protected static string $resource = HospitalDrugResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
