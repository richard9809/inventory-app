<?php

namespace App\AdminContext\Resources\DispensaryDrugResource\Pages;

use App\AdminContext\Resources\DispensaryDrugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDispensaryDrug extends CreateRecord
{
    protected static string $resource = DispensaryDrugResource::class;
}
