<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminRestrictedRoutes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // Check if the user is an admin
        if ($user && $user->role_id == 1) {
            // Redirect back to admin dashboard with a Toastr message
            // toastr()->warning('Unauthorized access!');
            return redirect()->route('admin.dashboard');
        }
        return $next($request);
    }
}
