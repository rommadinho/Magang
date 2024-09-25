<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaians = Penilaian::all();
        return view('penilaian.index', compact('penilaians'));
    }

    public function create()
    {
        
        return view('penilaian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'nilai' => 'required|integer',
            'keterangan' => 'required',
        ]);

        Penilaian::create($request->all());
        return redirect()->route('penilaian.index')->with('success', 'Penilaian berhasil ditambahkan');

    }

    public function edit(Penilaian $penilaian)
    {
        return view('penilaian.edit', compact('penilaian'));
    }

    public function update(Request $request, Penilaian $penilaian)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'nilai' => 'required|integer',
            'keterangan' => 'required',
        ]);

        $penilaian->update($request->all());
        return redirect()->route('penilaian.index');
    }

    public function destroy(Penilaian $penilaian)
    {
        $penilaian->delete();
        return redirect()->route('penilaian.index');
    }
}
