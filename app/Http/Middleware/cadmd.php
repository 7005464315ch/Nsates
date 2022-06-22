<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cadmd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       if(!session()->has('superid')){
            return redirect('123.123.01.16')->with('failed', 'Access Denied for User.');
        }
        return $next($request);
    }
}
