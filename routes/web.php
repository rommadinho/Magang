<?php
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\PenilaianController;
use Illuminate\Support\Facades\Route;

// Public Routes (dapat diakses tanpa autentikasi)
Route::get('/', function () {
    return view('landingpage'); // Halaman landing bisa diakses semua user
})->name('landingpage');

// Route untuk form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Protected Routes (hanya dapat diakses setelah login)
Route::middleware(['auth.custom'])->group(function () {
    // Route dashboard yang bisa diakses setelah login
    Route::get('/dashboard', [KaryawanController::class, 'index'])->name('dashboard');

    // Routes untuk Karyawan
    Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
    Route::get('/tambah-karyawan-view', [KaryawanController::class, 'create'])->name('karyawan.create');
    Route::post('/proses-tambah-karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
    Route::get('/edit-karyawan/{id}', [KaryawanController::class, 'edit'])->name('karyawan.edit');
    Route::put('/proses-edit-karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
    Route::get('/unduh-pdf', [KaryawanController::class, 'unduhPDF'])->name('karyawan.unduh-pdf');

    // Routes untuk Absensi
    Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
    Route::get('/absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
    Route::post('/absensi/store', [AbsensiController::class, 'store'])->name('absensi.store');
    Route::get('/absensi/edit/{id}', [AbsensiController::class, 'edit'])->name('absensi.edit');
    Route::put('/absensi/update/{id}', [AbsensiController::class, 'update'])->name('absensi.update');
    Route::delete('/absensi/destroy/{id}', [AbsensiController::class, 'destroy'])->name('absensi.destroy');

    // Routes untuk Penilaian
    Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');
    Route::get('/penilaian/create', [PenilaianController::class, 'create'])->name('penilaian.create');
    Route::post('/penilaian/store', [PenilaianController::class, 'store'])->name('penilaian.store');
    Route::get('/penilaian/edit/{id}', [PenilaianController::class, 'edit'])->name('penilaian.edit');
    Route::put('/penilaian/update/{id}', [PenilaianController::class, 'update'])->name('penilaian.update');
    Route::delete('/penilaian/destroy/{id}', [PenilaianController::class, 'destroy'])->name('penilaian.destroy');

    // Routes untuk Penggajian
    Route::get('/penggajian', [PenggajianController::class, 'index'])->name('penggajian.index');
    Route::get('/penggajian/create', [PenggajianController::class, 'create'])->name('penggajian.create');
    Route::post('/penggajian/store', [PenggajianController::class, 'store'])->name('penggajian.store'); // Perbaiki disini
    Route::get('/penggajian/edit/{id}', [PenggajianController::class, 'edit'])->name('penggajian.edit');
    Route::put('/penggajian/update/{id}', [PenggajianController::class, 'update'])->name('penggajian.update');
    Route::delete('/penggajian/destroy/{id}', [PenggajianController::class, 'destroy'])->name('penggajian.destroy');

    // Logout Route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Optional: Jika ada route khusus untuk dashboard
Route::get('/home', [KaryawanController::class, 'index'])->middleware(['auth.custom'])->name('home');
