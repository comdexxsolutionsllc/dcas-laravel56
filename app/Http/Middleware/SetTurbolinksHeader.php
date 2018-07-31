<?php

namespace App\Http\Middleware;

use Closure;

class SetTurbolinksHeader
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        return $response->header('Turbolinks-Location', $request->route()->uri());
    }
}
