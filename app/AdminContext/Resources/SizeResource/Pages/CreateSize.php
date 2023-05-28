<?php

namespace App\AdminContext\Resources\SizeResource\Pages;

use App\AdminContext\Resources\SizeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSize extends CreateRecord
{
    protected static string $resource = SizeResource::class;
}
