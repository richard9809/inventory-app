<?php

namespace App\HospitalContext\Resources\HospitalInventoryResource\Pages;

use App\HospitalContext\Resources\HospitalInventoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListHospitalInventories extends ListRecords
{
    protected static string $resource = HospitalInventoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()
            ->where('hospital_id', auth()->guard('hospital')->user()->hospital_id)
            ->latest();
    }
}
