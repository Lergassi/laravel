<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Artisan;

/**
 * Middleware для очистки кеша во время разработки при app.debug == true.
 * Class ClearCache
 * @package App\Http\Middleware
 */
class ClearCache
{
    public function handle($request, Closure $next)
    {
        Artisan::call('view:clear');

        return $next($request);
    }
}