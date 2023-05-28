<?php

namespace App\HospitalContext\Resources\HospitalInventoryResource\Pages;

use App\HospitalContext\Resources\HospitalInventoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHospitalInventory extends EditRecord
{
    protected static string $resource = HospitalInventoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
