<?php

namespace App\AdminContext\Resources\DrugResource\Pages;

use App\AdminContext\Resources\DrugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDrug extends CreateRecord
{
    protected static string $resource = DrugResource::class;
}
