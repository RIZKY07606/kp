<?php

namespace App\Filament\Resources\ContactLogResource\Pages;

use App\Filament\Resources\ContactLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContactLog extends ViewRecord
{
    protected static string $resource = ContactLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
