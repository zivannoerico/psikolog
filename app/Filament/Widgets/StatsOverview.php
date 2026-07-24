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
    protected static ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        $artikelCount = Artikel::where('status', 'published')->count();
        $pesanCount = Pesan::where('status', 'baru')->count();
        $layananCount = Layanan::where('aktif', true)->count();
        $testimoniCount = Testimoni::where('aktif', true)->count();

        $artikelTrend = $this->getArtikelTrend();
        $pesanTrend = $this->getPesanTrend();
        $layananTrend = $this->getLayananTrend();
        $testimoniTrend = $this->getTestimoniTrend();

        return [
            Stat::make('Artikel Publikasi', $artikelCount)
                ->description($artikelCount . ' artikel telah dipublikasikan')
                ->descriptionIcon('heroicon-m-document-text')
                ->chart($artikelTrend)
                ->chartColor('#10B981')
                ->color('success'),

            Stat::make('Pesan Masuk', $pesanCount)
                ->description($pesanCount . ' pesan baru belum dibaca')
                ->descriptionIcon('heroicon-m-envelope')
                ->chart($pesanTrend)
                ->chartColor('#EF4444')
                ->color('danger'),

            Stat::make('Layanan Aktif', $layananCount)
                ->description($layananCount . ' layanan sedang ditampilkan')
                ->descriptionIcon('heroicon-m-briefcase')
                ->chart($layananTrend)
                ->chartColor('#C8607A')
                ->color('primary'),

            Stat::make('Testimoni', $testimoniCount)
                ->description($testimoniCount . ' testimoni dari klien')
                ->descriptionIcon('heroicon-m-chat-bubble-left-ellipsis')
                ->chart($testimoniTrend)
                ->chartColor('#3B82F6')
                ->color('info'),
        ];
    }

    protected function getArtikelTrend(): array
    {
        $monthly = Artikel::where('status', 'published')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total')
            ->toArray();

        return $this->padTrend($monthly, 6);
    }

    protected function getPesanTrend(): array
    {
        $monthly = Pesan::where('status', 'baru')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total')
            ->toArray();

        return $this->padTrend($monthly, 6);
    }

    protected function getLayananTrend(): array
    {
        $monthly = Layanan::where('aktif', true)
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total')
            ->toArray();

        return $this->padTrend($monthly, 6);
    }

    protected function getTestimoniTrend(): array
    {
        $monthly = Testimoni::where('aktif', true)
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total')
            ->toArray();

        return $this->padTrend($monthly, 6);
    }

    protected function padTrend(array $data, int $minLength): array
    {
        if (count($data) >= $minLength) {
            return array_slice($data, -$minLength);
        }

        return array_pad($data, -$minLength, 0);
    }
}
