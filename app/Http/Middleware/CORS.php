<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;

use Closure;

class CORS
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
        header('Acess-Control-Allow-Origin: *');
        header('Acess-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        header('Acess-Control-Allow-Origin: Content-type, X-Auth-Token, Authorization, Origin');
        return $next($request);
    }
}
