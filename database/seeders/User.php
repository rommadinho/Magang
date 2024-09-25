<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('1234'),
                'role' => 'admin',
            ],
            [
                'name' => 'Karyawan',
                'username' => 'karyawan',
                'password' => Hash::make('1234'),
                'role' => 'karyawan',
            ],
        ];

        DB::table('users')->insert($data);
    }
}
