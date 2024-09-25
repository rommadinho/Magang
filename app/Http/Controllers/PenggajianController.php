<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    // Menampilkan data penggajian
    public function index()
    {
        $penggajians = Penggajian::all();
        return view('penggajian.index', compact('penggajians'));
    }

    // Menampilkan form untuk menambah penggajian baru
    public function create()
    {
        return view('penggajian.create');
    }

    // Menyimpan data penggajian baru
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama_karyawan' => 'required',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'nullable|numeric',
            'potongan' => 'nullable|numeric',
            'total_gaji' => 'required|numeric',
        ]);

        // Menyimpan data penggajian
        Penggajian::create($request->only(['nama_karyawan', 'gaji_pokok', 'tunjangan', 'potongan', 'total_gaji']));

        // Redirect ke dashboard dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Penggajian berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit data penggajian
    public function edit(Penggajian $penggajian)
    {
        return view('penggajian.edit', compact('penggajian'));
    }

    // Memperbarui data penggajian yang ada
    public function update(Request $request, Penggajian $penggajian)
    {
        // Validasi input dari form
        $request->validate([
            'nama_karyawan' => 'required',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'nullable|numeric',
            'potongan' => 'nullable|numeric',
            'total_gaji' => 'required|numeric',
        ]);

        // Update data penggajian
        $penggajian->update($request->only(['nama_karyawan', 'gaji_pokok', 'tunjangan', 'potongan', 'total_gaji']));

        // Redirect ke halaman index penggajian
        return redirect()->route('penggajian.index')->with('success', 'Penggajian berhasil diperbarui');
    }

    // Menghapus data penggajian
    public function destroy(Penggajian $penggajian)
    {
        // Hapus data penggajian dari database
        $penggajian->delete();

        // Redirect ke halaman index penggajian dengan pesan sukses
        return redirect()->route('penggajian.index')->with('success', 'Penggajian berhasil dihapus');
    }
}
