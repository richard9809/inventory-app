<?php

namespace App\AdminContext\Resources\InvoiceResource\Pages;

use App\AdminContext\Resources\InvoiceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInvoice extends CreateRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->user()->id;

        return $data;
    }
}
