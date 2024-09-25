<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Absensi extends Seeder
{
    /**
     * Seed the absensi table.
     *
     * @return void
     */
    public function run()
    {
            $dataAbsensi = [            
            [
                'karyawan_id' => 1,
                'tanggal' => Carbon::now()->toDateString(),
                'status' => 'Hadir',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'karyawan_id' => 2,
                'tanggal' => Carbon::now()->toDateString(),
                'status' => 'Izin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];
    DB::table('absensis')->insert($dataAbsensi);
    }
}
