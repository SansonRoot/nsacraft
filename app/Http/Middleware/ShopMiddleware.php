<?php

namespace App\Http\Middleware;

use Closure;

class ShopMiddleware
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

        if(!Auth::guard('shop')->check()){
            return view('shop.auth.login');
        }
        return $next($request);
    }
}
