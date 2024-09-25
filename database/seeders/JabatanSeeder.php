<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Jabatan;

class JabatanSeeder extends Seeder
{
    public function run()
    {
        $dataJabatan = [
            [
                'nama_jabatan' => 'Kepala Ruangan',
                'deskripsi' => 'Yang Mengepalai Ruangan'
            ],
            [
                'nama_jabatan' => 'Admin',
                'deskripsi' => 'Admininstrator'
            ],
            [
                'nama_jabatan' => 'Staff',
                'deskripsi' => 'Mengelola Data'
            ] 
        ];
        DB::table('jabatans')->insert($dataJabatan);
    }
}
