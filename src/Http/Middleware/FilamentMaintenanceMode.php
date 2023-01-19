<?php

namespace KaanTanis\FilamentMaintenanceMode\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FilamentMaintenanceMode
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
