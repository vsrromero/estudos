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

        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();


        if($ip === '::1'){
            $ip = "localhost";
        }

        if($route === '/'){
            $route = '/index';
        }


        LogAccess::create(["log" => "IP $ip REQUESTED ROUTE $route"]);

        return $next($request);
        //return $next($request);
    }
}
