<?php

namespace App\Filament\Resources\ArtikelResource\Pages;

use App\Filament\Resources\ArtikelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtikel extends EditRecord
{
    protected static string $resource = ArtikelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus')
                ->modalHeading(fn ($record) => 'Hapus Artikel: ' . \Illuminate\Support\Str::limit(strip_tags($record->judul), 30))
                ->modalDescription('Apakah Anda yakin ingin menghapus artikel ini? Tindakan ini tidak dapat dibatalkan.'),
        ];
    }
}
