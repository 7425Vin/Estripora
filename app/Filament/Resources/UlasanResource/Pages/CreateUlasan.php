<?php

namespace App\Filament\Resources\UlasanResource\Pages;

use App\Filament\Resources\UlasanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUlasan extends CreateRecord
{
    protected static string $resource = UlasanResource::class;

    protected static ?string $title = 'Tambah Ulasan';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
