<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Penggajian extends Seeder
{
    /**
     * Seed the penggajian table.
     *
     * @return void
     */
    public function run()
    {
        $dataPenggajian = [
            [
                'nama_karyawan' => 'John Doe',
                'gaji_pokok' => 5000000,
                'tunjangan' => 1000000,
                'potongan' => 500000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_karyawan' => 'Jane Smith',
                'gaji_pokok' => 6000000,
                'tunjangan' => 1200000,
                'potongan' => 600000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];
        DB::table('penggajians')->insert($dataPenggajian);
    }
}
