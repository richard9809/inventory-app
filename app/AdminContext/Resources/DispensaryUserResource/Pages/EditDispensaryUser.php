<?php

namespace App\AdminContext\Resources\DispensaryUserResource\Pages;

use App\AdminContext\Resources\DispensaryUserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDispensaryUser extends EditRecord
{
    protected static string $resource = DispensaryUserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
