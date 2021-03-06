<?php

namespace Torralbodavid\DuckFunkCore\Http\Middleware;

use Closure;

class HousekeepingMiddleware
{
    public function handle($request, Closure $next)
    {
        return core()->user()->permissions->housekeeping_read
            ? $next($request)
            : redirect('home')->with('status', 403);
    }
}
