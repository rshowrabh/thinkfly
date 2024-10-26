<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurCountryResource\Pages;
use App\Filament\Resources\OurCountryResource\RelationManagers;
use App\Models\OurCountry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\RichText;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class OurCountryResource extends Resource
{
    protected static ?string $model = OurCountry::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return __('Sections');
    }
    public static function getNavigationLabel(): string
    {
        return __('Our Countries Slider');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')->image()->imageEditor()->required(),
                FileUpload::make('flag')->image()->imageEditor()->required(),
                TextInput::make('category')->required()->label('Heading'),
                Textarea::make('sub_text')->required(),
                RichEditor::make('content'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                ImageColumn::make('flag'),
                TextColumn::make('category'),
                TextColumn::make('subtext'),
                // TextColumn::make('content'),
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
            'index' => Pages\ListOurCountries::route('/'),
            'create' => Pages\CreateOurCountry::route('/create'),
            'edit' => Pages\EditOurCountry::route('/{record}/edit'),
        ];
    }
}
