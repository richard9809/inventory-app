<?php

namespace App\HospitalContext\Resources;

use App\HospitalContext\Resources\HospitalInventoryResource\Pages;
use App\HospitalContext\Resources\HospitalInventoryResource\RelationManagers;
use App\Models\HospitalInventory;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Iotronlab\FilamentMultiGuard\Concerns\ContextualResource;

class HospitalInventoryResource extends Resource
{
    use ContextualResource;

    protected static ?string $model = HospitalInventory::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\Select::make('drug_id')
                            ->label('Drug')
                            ->relationship('drug', 'name')
                            ->required(),
                        Forms\Components\TextInput::make('quantity')
                            ->numeric()
                            ->required(),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hospital.name')
                    ->label('Hospital')
                    ->searchable()
                    ->hidden(),
                Tables\Columns\TextColumn::make('drug.name')
                    ->label('Drug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->label('Quantity Used'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
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
            'index' => Pages\ListHospitalInventories::route('/'),
            'create' => Pages\CreateHospitalInventory::route('/create'),
            'edit' => Pages\EditHospitalInventory::route('/{record}/edit'),
        ];
    }    
}
