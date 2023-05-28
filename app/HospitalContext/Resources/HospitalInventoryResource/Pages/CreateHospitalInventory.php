<?php

namespace App\HospitalContext\Resources\HospitalInventoryResource\Pages;

use App\HospitalContext\Resources\HospitalInventoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHospitalInventory extends CreateRecord
{
    protected static string $resource = HospitalInventoryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['hospital_id'] = auth()->guard('hospital')->user()->hospital_id;

        return $data;
    }
}
