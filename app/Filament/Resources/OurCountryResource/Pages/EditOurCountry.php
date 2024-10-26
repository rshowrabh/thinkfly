<?php

namespace App\Filament\Resources\OurCountryResource\Pages;

use App\Filament\Resources\OurCountryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurCountry extends EditRecord
{
    protected static string $resource = OurCountryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
