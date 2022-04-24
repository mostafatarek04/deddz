<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MyAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $cookieUser = $request->cookie('logged_in_usesssr');
        $cookieState= $request->cookie('logged_state');

        if ($cookieState === '1' && isset($cookieUser)){
             return $next($request);
        }else{
             return redirect('/signup');
        }

             //      return $next($request);



    }
}
