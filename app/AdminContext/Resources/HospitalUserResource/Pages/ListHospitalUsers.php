<?php

namespace App\AdminContext\Resources\HospitalUserResource\Pages;

use App\AdminContext\Resources\HospitalUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHospitalUsers extends ListRecords
{
    protected static string $resource = HospitalUserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
