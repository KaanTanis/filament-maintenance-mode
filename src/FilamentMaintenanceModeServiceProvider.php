<?php

namespace KaanTanis\FilamentMaintenanceMode;

use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\View;
use KaanTanis\FilamentMaintenanceMode\Http\Livewire\MaintenanceMode;
use KaanTanis\FilamentMaintenanceMode\Http\Middleware\FilamentMaintenanceMode;
use KaanTanis\FilamentMaintenanceMode\Http\Middleware\PreventRequestsDuringMaintenance;
use Livewire\Livewire;
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

    /**
     * @throws BindingResolutionException
     */
    public function boot()
    {
        parent::boot();

        Livewire::component('filament-maintenance-mode::maintenance-mode-button', MaintenanceMode::class);

        Filament::serving(function () {
            Filament::registerRenderHook(
                'global-search.end',
                fn () => view('filament-maintenance-mode::widgets.toolbar-menu'),
            );
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews()
            ->hasConfigFile()
            ->hasTranslations();
    }
}
