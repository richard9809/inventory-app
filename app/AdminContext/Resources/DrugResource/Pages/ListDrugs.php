<?php

namespace App\AdminContext\Resources\DrugResource\Pages;

use App\AdminContext\Resources\DrugResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListDrugs extends ListRecords
{
    protected static string $resource = DrugResource::class;

    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()
            ->with('category', 'size')
            ->leftJoin('warehouse_drugs', 'drugs.id', '=', 'warehouse_drugs.drug_id')
            ->select('drugs.*', 'warehouse_drugs.quantity as quantity');
    }

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
