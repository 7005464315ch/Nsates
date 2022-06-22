<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class staffmd
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
       if(!session()->has('staffaid')){
            return redirect('stafflogin')->with('failed', 'Access Denied for User.');
        }
        return $next($request);
    }
}
