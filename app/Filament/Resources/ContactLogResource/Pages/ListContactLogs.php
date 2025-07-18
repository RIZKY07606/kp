<?php

namespace App\Filament\Resources\ContactLogResource\Pages;

use App\Filament\Resources\ContactLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactLogs extends ListRecords
{
    protected static string $resource = ContactLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
