<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardKaryawanController extends Controller
{
    public function index()
    {
        // Cek jika pengguna memiliki role 'admin'
        if (Auth::user()->role === 'admin') {
            // Arahkan ke dashboard admin
            return view('admin.dashboard');
        } 
        // Jika pengguna adalah karyawan biasa
        else {
            // Arahkan ke dashboard karyawan
            return view('karyawan.dashboard');
        }
    }
}
