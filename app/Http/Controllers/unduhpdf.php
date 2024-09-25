<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class unduhpdf extends Controller
{
    public function downloadPDF()
    {
        // Ambil data penilaian dari database
        $karyawans = Karyawan::with('karyawan')->get();

        // Generate PDF menggunakan DomPDF
        $pdf = Pdf::loadView('unduhpdf', ['karyawans' => $karyawans]);

        // Download PDF
        return $pdf->download('laporan_karyawan.pdf');
    }
}
