<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required()->maxLength(150)->minLength(1)->live(onBlur:true)
                ->afterStateUpdated(function(string $operation,$state,Forms\Set $set){
                    if($operation === 'edit')
                    {
                        return ;
                    }
                    $set('slug',Str::slug($state));
                }),
                TextInput::make('slug')->required()->unique(ignoreRecord:true)->maxLength(150)->minLength(1)->disabled()->dehydrated(),
                Select::make('text_color')
                ->options([
                    'gray' => 'gray',
                    'blue' => 'blue',
                    'red' => 'red',
                    'yellow' => 'yellow',
                    'pink' => 'pink',
                    'indigo' => 'indigo',
                    'purple' => 'purple',
                    'green' => 'green',
                    'lime' => 'lime',
                ])
                ->default('gray') 
                ->nullable()
                ->preload(),
                Select::make('bg_color')
                ->options([
                    'gray' => 'gray',
                    'blue' => 'blue',
                    'red' => 'red',
                    'yellow' => 'yellow',
                    'pink' => 'pink',
                    'indigo' => 'indigo',
                    'purple' => 'purple',
                    'green' => 'green',
                    'lime' => 'lime',
                ])
                ->default('gray')
                ->nullable()
                ->preload(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('slug')->searchable()->sortable(),
                TextColumn::make('text_color')->searchable()->sortable(),
                TextColumn::make('bg_color')->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
