<?php

namespace App\Http\Middleware;

use Closure;

class NoCache
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
                ->header('Cache-Control', 'no-store, no-cache, must-revalidate')
                ->header('Expires', 'Wed, 10 Aug 1988 09:52:00 GMT');
    }
}
