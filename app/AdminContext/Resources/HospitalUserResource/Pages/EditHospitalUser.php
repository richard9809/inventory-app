<?php

namespace App\AdminContext\Resources\HospitalUserResource\Pages;

use App\AdminContext\Resources\HospitalUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHospitalUser extends EditRecord
{
    protected static string $resource = HospitalUserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
