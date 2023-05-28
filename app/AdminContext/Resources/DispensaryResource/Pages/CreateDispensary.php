<?php

namespace App\AdminContext\Resources\DispensaryResource\Pages;

use App\AdminContext\Resources\DispensaryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDispensary extends CreateRecord
{
    protected static string $resource = DispensaryResource::class;
}
