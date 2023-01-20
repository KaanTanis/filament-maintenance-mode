<?php

namespace KaanTanis\FilamentMaintenanceMode\Http\Livewire;

use Filament\Facades\Filament;
use Filament\Notifications\Notification;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Http\MaintenanceModeBypassCookie;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Livewire\Component;

class MaintenanceMode extends Component
{
    public $mode;

    /**
     * @throws \Throwable
     */
    public function mount(): void
    {
        throw_if(
            !Filament::auth()->check(),
            AuthenticationException::class
        );

        if (file_exists(storage_path('framework/down'))) {
            $this->mode = true;
        } else {
            $this->mode = false;
        }
    }

    public function save()
    {
        $this->mode = !$this->mode;
        $code = uniqid();

        $this->mode
            ? Artisan::call('down', [
            '--secret' => $code,
        ])
            : Artisan::call('up');

        Notification::make()
            ->body('Maintenance mode is now ' . ($this->mode ? 'enabled' : 'disabled'))
            ->success()
            ->send();

        if ($this->mode) {
            return redirect('/' . $code);
        }
    }

    public function render(): View
    {
        return view('filament-maintenance-mode::livewire.maintenance-mode-button');
    }
}
