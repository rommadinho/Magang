<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Asumsi role disimpan di tabel 'users' atau 'karyawans'
        if (!auth()->check() || auth()->user()->role !== $role) {
            return redirect('/unauthorized'); // Halaman Unauthorized
        }

        return $next($request);
    }
}
