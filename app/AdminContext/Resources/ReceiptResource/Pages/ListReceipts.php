<?php

namespace App\AdminContext\Resources\ReceiptResource\Pages;

use App\AdminContext\Resources\ReceiptResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReceipts extends ListRecords
{
    protected static string $resource = ReceiptResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
