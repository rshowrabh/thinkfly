<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->required(),
                Forms\Components\Select::make('roles')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload()
                    ->required()
                    ->searchable(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                TextInput::make('password_confirmation')
                    ->same('password')
                    ->required('password')
                    ->password(),
                FileUpload::make('profile_photo_path')
                ->avatar()
                ->label('Profile Photo')
                ->disk('public')
                ->directory('profile')
                ->image()
                ->visibility('public')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profile_photo_path')
                ->label('Avatar')
                ->defaultImageUrl(url('/storage/profile/avatar.jpg'))
                ->circular(),
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('roles.name')
                ->formatStateUsing(fn (string $state) => Str::of($state)->snake()->replace('_', ' ')->title())
                ->badge(),
                TextColumn::make('email')->searchable()->sortable()
            ])
            ->filters([
                SelectFilter::make('roles')->relationship('roles', 'name')
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                ->after(function (User $record) {
                    if ($record->profile_photo_path) {
                       Storage::disk('public')->delete($record->profile_photo_path);
                    }
                 }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                    ->after(function (User $record) {
                        if ($record->profile_photo_path) {
                           foreach ($record->profile_photo_path as $ph) Storage::disk('public')->delete($ph);
                        }
                     }),
                ]),
            ])
            ->striped();
            
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
