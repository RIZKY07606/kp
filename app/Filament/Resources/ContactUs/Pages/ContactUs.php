<?php

namespace App\Filament\Resources\ContactUs\Pages;

use Filament\Pages\Page;

class ContactUs extends Page
{
    protected static string $view = 'filament.resources.contact-us.pages.contact-us';

    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationLabel = 'Contact Us';
    protected static ?int $navigationSort = 5;

}
