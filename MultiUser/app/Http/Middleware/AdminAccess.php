<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() AND Auth::user()->type == "admin") {
            return $next($request);
          }else {
            if (!Auth::check()) {
              return redirect('/login');
            }
            return redirect('/');
          }
        
    }
}
