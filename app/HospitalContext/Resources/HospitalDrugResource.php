<?php

namespace App\HospitalContext\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\HospitalContext\Resources\HospitalDrugResource\Pages;
use App\HospitalContext\Resources\HospitalDrugResource\RelationManagers;
use App\Models\HospitalDrug;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Iotronlab\FilamentMultiGuard\Concerns\ContextualResource;

class HospitalDrugResource extends Resource
{
    use ContextualResource;

    protected static ?string $model = HospitalDrug::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hospital.name')
                    ->searchable()
                    ->hidden(),
                Tables\Columns\TextColumn::make('drug.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('drug_id')
                    ->label('Drug')
                    ->relationship('drug', 'name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                FilamentExportBulkAction::make('export'),
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHospitalDrugs::route('/'),
        ];
    }    
}
