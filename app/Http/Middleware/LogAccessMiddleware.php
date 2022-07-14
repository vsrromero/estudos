<?php

namespace App\Http\Middleware;

use App\LogAccess;
use Closure;

class LogAccessMiddleware
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
        DD($request);
        LogAccess::create(['log' => 'IP xyz REQUESTED ROUTE abcd']);
        return Response('Middleware');
        //return $next($request);
    }
}
