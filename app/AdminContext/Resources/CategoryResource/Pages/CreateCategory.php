<?php

namespace App\AdminContext\Resources\CategoryResource\Pages;

use App\AdminContext\Resources\CategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
