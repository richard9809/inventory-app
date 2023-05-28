<?php

namespace App\AdminContext\Resources\DispensaryDrugResource\Pages;

use App\AdminContext\Resources\DispensaryDrugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDispensaryDrug extends EditRecord
{
    protected static string $resource = DispensaryDrugResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
