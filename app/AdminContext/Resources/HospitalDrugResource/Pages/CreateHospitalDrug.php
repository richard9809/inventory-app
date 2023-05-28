<?php

namespace App\AdminContext\Resources\HospitalDrugResource\Pages;

use App\AdminContext\Resources\HospitalDrugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHospitalDrug extends CreateRecord
{
    protected static string $resource = HospitalDrugResource::class;
}
