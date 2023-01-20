<div
    class="flex items-center gap-2"
    x-data="{
        maintenanceMode: @entangle('mode'),
        async setCookie(code) {
            const result = await (await fetch('/' + code, {method: 'get'})).json();
        }
    }"
    @set-maintenance-mode.window="maintenanceMode = $event.detail.mode; this.setCookie($event.detail.code)"
>
    <x-filament::button wire:click="save" type="button" :color="$mode ? 'danger' : 'gray'" style="margin-inline-start: 1rem;border-radius:100%;border:none" @class([
        'flex flex-shrink-0 w-10 h-10 rounded-full items-center justify-center',
        'dark:bg-gray-900' => config('filament.dark_mode'),
    ]) x-tooltip.raw="{{ __('filament-maintenance-mode::general.button-tooltip') }}">
        @if($mode)
            <x-heroicon-s-server class="w-5 h-5" wire:loading.remove.delay="" />
        @else
            <x-heroicon-o-server class="w-5 h-5" wire:loading.remove.delay=""/>
        @endif
        <x-filament-support::loading-indicator x-cloak="" wire:loading.delay="" wire:target="save" class="filament-button-icon w-5 h-5"/>
    </x-filament::button>

    <div x-cloak="" x-show="maintenanceMode" class="absolute bg-danger-600 text-white p-2 grid grid-cols-1 justify-end h-10 px-4 animate-pulse" style="top: 4rem; right: 0; min-width: 10px; border-top-left-radius: 5px;border-bottom-left-radius: 5px;">
        <p class="grow">Maintenance mode active</p>
    </div>
</div>

{{ session('test') }}
