<?php

namespace App\AdminContext\Resources\HospitalUserResource\Pages;

use App\AdminContext\Resources\HospitalUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHospitalUser extends CreateRecord
{
    protected static string $resource = HospitalUserResource::class;
}
