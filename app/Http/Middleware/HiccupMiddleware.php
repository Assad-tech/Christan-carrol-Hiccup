<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class HiccupMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $prefix = $request->route()->getPrefix();
        $user = Auth::user();
        // dd($prefix);
        if($user->role_id = 1 && $prefix == '/admin') {
            return $next($request);
        }elseif($user->role_id = 2 && $prefix == '/user') {
            return $next($request);
        }

        // return $next(401);
        abort(401, 'Unauthorized access.');

    }
}
