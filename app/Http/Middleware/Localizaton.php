<?php

namespace App\Http\Middleware;

use Closure;

class Localizaton
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
        if(\Session::has('local')){
            \App::setlocale(\Session::get('local'));
        }
        return $next($request);
    }
}
