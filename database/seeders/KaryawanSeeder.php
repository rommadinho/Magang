<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        Karyawan::create([
            'nama' => 'sumbul',
            'jabatan_id' => 1,  // Sesuaikan dengan ID dari seeder jabatan
            'departemen_id' => 2, // Sesuaikan dengan ID dari seeder departemen
        ]);

        Karyawan::create([
            'nama' => 'Jane Smith',
            'jabatan_id' => 2,
            'departemen_id' => 3,
        ]);

        Karyawan::create([
            'nama' => 'Robert Johnson',
            'jabatan_id' => 3,
            'departemen_id' => 1,
        ]);
    }
}
