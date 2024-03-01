<?php

namespace App\Filament\Resources\AjaranResource\Pages;

use App\Filament\Resources\AjaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAjaran extends EditRecord
{
    protected static string $resource = AjaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
