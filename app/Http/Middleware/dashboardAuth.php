<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class dashboardAuth
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
        if(auth()->user()->user_type == 'customer'){
            return view('home');
        }
        elseif(auth()->user()->user_type == 'supplier'){
            return view('dashboard.product');
        }
        return $next($request);
    }
}
