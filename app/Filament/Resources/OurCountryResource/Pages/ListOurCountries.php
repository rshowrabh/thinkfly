<?php

namespace App\Filament\Resources\OurCountryResource\Pages;

use App\Filament\Resources\OurCountryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurCountries extends ListRecords
{
    protected static string $resource = OurCountryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
