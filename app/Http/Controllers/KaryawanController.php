<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use App\Models\Departemen;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KaryawanController extends Controller
{
    public function index() {
        $karyawans = Karyawan::all();

        return view('karyawan.dashboard', ['karyawans' => $karyawans]);
    }

    public function create() {
        $karyawans = Karyawan::all();
        $jabatans = Jabatan::all();
        $departemens = Departemen::all();
    
        return view('karyawan.create', ['karyawans' => $karyawans, 'jabatans' => $jabatans, 'departemens' => $departemens]);
    }
     

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'jabatan_id' => 'required',
            'departemen_id' => 'required',
        ], [
            'nama.required' => 'isi  nama ',
            'alamat.required' => 'isi alamat ',
            'telepon.required' => 'isi telepon  ',
            'jabatan_id.required' => 'isi jabatan ',
            'departemen_id.required' => 'isi departemen',

        ]);

        Karyawan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'jabatan_id' => $request->jabatan_id,
            'departemen_id' => $request->departemen_id,
        ]);

        return redirect()->route('karyawan.index')->with('success', 'Karyawan created successfully.');
    }

    public function edit($id) {
        $karyawans = Karyawan::find($id);
        $jabatans = Jabatan::all();
        $departemens = Departemen::all();

        return view('karyawan.edit', ['karyawans' => $karyawans, 'jabatans' => $jabatans, 'departemens' => $departemens]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'jabatan_id' => 'required',
            'departemen_id' => 'required',
        ]);

        $data = Karyawan::find($id);
        $data['nama'] = ucwords($request['nama']);
        $data['alamat'] = $request['alamat'];
        $data['telepon'] = $request['telepon'];
        $data['jabatan_id'] = $request['jabatan_id'];
        $data['departemen_id'] = $request['departemen_id'];

        $data->save();

        return redirect()->route('karyawan.index')->with('success', 'Karyawan updated successfully.');
    }

    public function destroy(Karyawan $karyawan) {
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('success', 'Karyawan deleted successfully.');
    }

    public function unduhPDF() {
        // Ambil data penilaian dari database
        $karyawans = Karyawan::all();

        // Generate PDF menggunakan DomPDF
        $pdf = Pdf::loadView('unduhpdf', ['karyawans' => $karyawans]);

        // Download PDF
        return $pdf->download('laporan_karyawan.pdf');
    }
}

