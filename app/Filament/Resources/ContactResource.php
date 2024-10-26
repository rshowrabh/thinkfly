<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    
    public static function getNavigationLabel(): string
    {
        return __('Appointments');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\TextInput::make('name'),
                \Filament\Forms\Components\Textarea::make('message'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                \Filament\Tables\Columns\TextColumn::make('email')->searchable()->sortable()->toggleable(),
                \Filament\Tables\Columns\TextColumn::make('phone')->searchable()->sortable()->toggleable(),
                \Filament\Tables\Columns\TextColumn::make('subject')->searchable()->sortable()->toggleable(),
                \Filament\Tables\Columns\TextColumn::make('address')->searchable()->sortable()->toggleable(),
                \Filament\Tables\Columns\TextColumn::make('message')->searchable()->sortable()->toggleable()
                ->limit(50)
                ->tooltip( fn ($record) :string => $record->message ?? '')
                ,
                \Filament\Tables\Columns\TextColumn::make('created_at')->searchable()->sortable()->dateTime(),
                
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                ->form([
                    \Filament\Forms\Components\TextInput::make('name'),
                    \Filament\Forms\Components\TextInput::make('email'),
                    \Filament\Forms\Components\TextInput::make('phone'),
                    \Filament\Forms\Components\TextInput::make('subject'),
                    \Filament\Forms\Components\TextInput::make('address'),
                    \Filament\Forms\Components\Textarea::make('message')->autosize(),
                ])
                ,
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->recordAction(Tables\Actions\ViewAction::class)
            ->striped()
            ;
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
