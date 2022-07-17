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
    public function handle($request, Closure $next, $autMethod, $profile )
    {
        echo "método $autMethod perfil $profile<br>";

        if($autMethod == 'standard'){
            echo "Check user and pass on DB $autMethod<br>";
        }
        if($autMethod == 'ldap') {
            echo "Check user and pass on AD $autMethod<br>";
        } else {
            return Response('Acces denied, this route demands an authentication');
        }
    }
}
