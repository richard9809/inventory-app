<?php

namespace App\AdminContext\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\AdminContext\Resources\DispensaryUserResource\Pages;
use App\AdminContext\Resources\DispensaryUserResource\RelationManagers;
use App\Models\DispensaryUser;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Iotronlab\FilamentMultiGuard\Concerns\ContextualResource;

class DispensaryUserResource extends Resource
{
    use ContextualResource;

    protected static ?string $model = DispensaryUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('dispensary_id')
                    ->label('Dispensary Located')
                    ->options(
                        \App\Models\Dispensary::all()
                            ->pluck('name', 'id')
                            ->toArray()
                    )
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('dispensary.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
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
            'index' => Pages\ListDispensaryUsers::route('/'),
            'create' => Pages\CreateDispensaryUser::route('/create'),
            'edit' => Pages\EditDispensaryUser::route('/{record}/edit'),
        ];
    }    
}
