<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Departemen;

class DepartemenSeeder extends Seeder
{
    public function run()
    {
        $dataDepartemen = [
            [
                'nama_departemen' => 'Poli Saraf',
                'deskripsi' => 'Penanganan Pasien Sakit saraf'
            ],
            [
                'nama_departemen' => 'Poli Gigi',
                'deskripsi' => 'Penanganan Pasien Sakit Gigi'
            ],
        ];

        DB::table('departemens')->insert($dataDepartemen);
    }
}
