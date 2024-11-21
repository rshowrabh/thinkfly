<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisaResource\Pages;
use App\Filament\Resources\VisaResource\RelationManagers;
use App\Models\Visa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\RichText;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class VisaResource extends Resource
{
    protected static ?string $model = Visa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return __('Sections');
    }
    public static function getNavigationLabel(): string
    {
        return __('Visa');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')->image()->imageEditor()->required(),
                FileUpload::make('icon')->image()->imageEditor()->required(),
                TextInput::make('category')->required()->label('Heading')
                ->live()->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')->required()->unique(Visa::class, 'slug', fn ($record) => $record),
                Textarea::make('sub_text')->required(),
                RichEditor::make('content'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                ImageColumn::make('icon'),
                TextColumn::make('category'),
                TextColumn::make('sub_text'),
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
            'index' => Pages\ListVisas::route('/'),
            'create' => Pages\CreateVisa::route('/create'),
            'edit' => Pages\EditVisa::route('/{record}/edit'),
        ];
    }
}
