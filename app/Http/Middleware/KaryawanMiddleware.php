<?php

// app/Http/Middleware/KaryawanMiddleware.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class KaryawanMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'karyawan') {
            return $next($request);
        }

        return redirect('/')->with('error', 'Anda tidak memiliki akses sebagai karyawan.');
    }
}

