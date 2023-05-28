<?php

namespace App\AdminContext\Resources\HospitalResource\Pages;

use App\AdminContext\Resources\HospitalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHospitals extends ListRecords
{
    protected static string $resource = HospitalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
