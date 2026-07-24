<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => '#C8607A',
                'secondary' => '#8B5CF6',
                'success' => '#10B981',
                'warning' => '#F59E0B',
                'danger' => '#EF4444',
                'info' => '#3B82F6',
                'gray' => [
                    50 => 'rgb(248, 250, 252)',
                    100 => 'rgb(241, 245, 249)',
                    200 => 'rgb(226, 232, 240)',
                    300 => 'rgb(203, 213, 225)',
                    400 => 'rgb(148, 163, 184)',
                    500 => 'rgb(100, 116, 139)',
                    600 => 'rgb(71, 85, 105)',
                    700 => 'rgb(51, 65, 85)',
                    800 => 'rgb(30, 41, 59)',
                    900 => 'rgb(15, 23, 42)',
                    950 => 'rgb(2, 6, 23)',
                ],
            ])
            ->font('Plus Jakarta Sans')
            ->brandName('An Moerty Psikologi')
            ->favicon(asset('images/favicon.png'))
            ->topNavigation()
            ->maxContentWidth('full')
            ->renderHook(
                'panels::head.end',
                fn () => '<style>body { background: red !important; }</style>' . view('filament.custom-css')->render(),
            )
            ->darkMode(false)
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                \App\Filament\Widgets\StatsOverview::class,
                Widgets\AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
