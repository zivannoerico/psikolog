<?php

namespace App\Filament\Widgets;

use App\Models\Artikel;
use App\Models\Layanan;
use App\Models\Pesan;
use App\Models\Testimoni;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '15s';

    protected function getStats(): array
    {
        return [
            Stat::make('Artikel Aktif', Artikel::where('status', 'published')->count())
                ->description('Total artikel yang telah dipublikasikan')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('success'),

            Stat::make('Pesan Baru', Pesan::where('status', 'baru')->count())
                ->description('Pesan dari website yang belum dibaca')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('danger'),

            Stat::make('Layanan Aktif', Layanan::where('aktif', true)->count())
                ->description('Total layanan yang ditampilkan')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('primary'),

            Stat::make('Testimoni', Testimoni::where('aktif', true)->count())
                ->description('Total testimoni klien')
                ->descriptionIcon('heroicon-m-chat-bubble-left-ellipsis')
                ->color('info'),
        ];
    }
}
