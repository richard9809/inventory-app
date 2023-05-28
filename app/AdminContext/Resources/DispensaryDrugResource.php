<?php

namespace App\AdminContext\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\AdminContext\Resources\DispensaryDrugResource\Pages;
use App\AdminContext\Resources\DispensaryDrugResource\RelationManagers;
use App\Models\DispensaryDrug;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Iotronlab\FilamentMultiGuard\Concerns\ContextualResource;

class DispensaryDrugResource extends Resource
{
    use ContextualResource;
    
    protected static ?string $model = DispensaryDrug::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Inventories';

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
                //
            ])
            ->filters([
                //
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
            'index' => Pages\ListDispensaryDrugs::route('/'),
            'create' => Pages\CreateDispensaryDrug::route('/create'),
            'edit' => Pages\EditDispensaryDrug::route('/{record}/edit'),
        ];
    }    
}
