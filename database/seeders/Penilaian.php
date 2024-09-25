<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class penilaian extends Seeder
{
    /**
     * Seed the penilaian table.
     *
     * @return void
     */
    public function run()
    {
        $dataPenilaian = [
            [
                'karyawan_id' => 1,
                'tanggal' => Carbon::now()->toDateString(),
                'penilaian' => 'Baik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'karyawan_id' => 2,
                'tanggal' => Carbon::now()->toDateString(),
                'penilaian' => 'Sangat Baik',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];
        DB::table('penilaians')->insert($dataPenilaian);
    }
}
