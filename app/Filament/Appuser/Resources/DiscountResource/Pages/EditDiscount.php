<?php

namespace App\Filament\Appuser\Resources\DiscountResource\Pages;

use App\Filament\Appuser\Resources\DiscountResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiscount extends EditRecord
{
    protected static string $resource = DiscountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
