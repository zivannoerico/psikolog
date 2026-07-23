<?php

namespace App\Filament\Resources\PesanResource\Pages;

use App\Filament\Resources\PesanResource;
use App\Models\Pesan;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPesan extends ViewRecord
{
    protected static string $resource = PesanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('balas')
                ->label('Balas via Email')
                ->icon('heroicon-o-envelope')
                ->color('success')
                ->url(fn () => 'mailto:' . $this->record->email . '?subject=Re: ' . urlencode($this->record->subjek ?? 'Pesan dari Website'))
                ->openUrlInNewTab()
                ->action(function () {
                    $this->record->update(['status' => 'dibalas']);
                }),

            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Mark as read when viewing
        if ($this->record->status === 'baru') {
            $this->record->markAsDibaca();
        }

        return $data;
    }
}
