<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        // Cek jika user sudah login, redirect ke dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('login'); // Ganti view login sesuai dengan file view yang kamu miliki
    }

    // Logika untuk menangani proses login
    public function login(Request $request)
    {
        // Validasi input dari form login
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Mendapatkan data login
        $credentials = $request->only('username', 'password');

        // Cek apakah username ada di database
        $user = User::where('name', $request->input('username'))->first();

        // Jika user ditemukan dan password cocok, login user
        if ($user && Hash::check($request->input('password'), $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            // Redirect ke halaman dashboard setelah login sukses
            return redirect()->route('dashboard');
        }

        // Jika login gagal, kembalikan ke halaman login dengan error
        return redirect()->back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    // Logika untuk logout
    public function logout(Request $request)
    {
        // Logout user dari sesi
        Auth::logout();

        // Invalidasi sesi dan regenerasi token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman landing setelah logout
        return redirect('/');
    }
}
