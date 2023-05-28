<?php

namespace App\AdminContext\Resources\HospitalResource\Pages;

use App\AdminContext\Resources\HospitalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHospital extends CreateRecord
{
    protected static string $resource = HospitalResource::class;
}
