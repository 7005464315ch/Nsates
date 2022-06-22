<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class fastmd
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
       if(!session()->has('fadminid')){
            return redirect('123.124.16.1')->with('failed', 'Access Denied for User.');
        }
        return $next($request);
    }
}
