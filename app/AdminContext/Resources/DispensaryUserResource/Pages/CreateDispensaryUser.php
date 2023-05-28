<?php

namespace App\AdminContext\Resources\DispensaryUserResource\Pages;

use App\AdminContext\Resources\DispensaryUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDispensaryUser extends CreateRecord
{
    protected static string $resource = DispensaryUserResource::class;
}
