<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AuthenticationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, string $autMethod, string $profile )
    {
        session_start();
        if(isset($_SESSION['email']) && $_SESSION =! ''){
            return $next($request);
        } else {
            return redirect()->route('common.login', ['error' => 2]);
        }
    }
}
