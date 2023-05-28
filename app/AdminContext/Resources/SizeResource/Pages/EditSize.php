<?php

namespace App\AdminContext\Resources\SizeResource\Pages;

use App\AdminContext\Resources\SizeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSize extends EditRecord
{
    protected static string $resource = SizeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
