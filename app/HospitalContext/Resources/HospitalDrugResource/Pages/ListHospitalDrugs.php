<?php

namespace App\HospitalContext\Resources\HospitalDrugResource\Pages;

use App\HospitalContext\Resources\HospitalDrugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListHospitalDrugs extends ListRecords
{
    protected static string $resource = HospitalDrugResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()
            ->where('hospital_id', auth()->guard('hospital')->user()->hospital_id);
    }
}
