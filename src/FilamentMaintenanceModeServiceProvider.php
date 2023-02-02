<?php

namespace KaanTanis\FilamentMaintenanceMode;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentMaintenanceModeServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-maintenance-mode';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-maintenance-mode' => __DIR__.'/../resources/dist/filament-maintenance-mode.css',
    ];

    protected array $scripts = [
        'plugin-filament-maintenance-mode' => __DIR__.'/../resources/dist/filament-maintenance-mode.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-maintenance-mode' => __DIR__ . '/../resources/dist/filament-maintenance-mode.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
