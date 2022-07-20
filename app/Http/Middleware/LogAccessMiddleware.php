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
        //get ip from request and which route is being accessed
        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();


        //change the IP localhost IPv6 to localhost
        if($ip === '::1'){
            $ip = "localhost";
        }

        //rename the route from / to /index
        if($route === '/'){
            $route = '/index';
        }

        //Model LogAccess saves on DB the information retrieved
        LogAccess::create(["log" => "IP $ip REQUESTED ROUTE $route"]);

        return $next($request);
        //return $next($request);
    }
}
