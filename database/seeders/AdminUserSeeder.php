<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'Username' => 'admin',
            'password' => Hash::make('1234'), // Hash the password
            'role' => 'admin', // Set the role to admin
        ]);
    }
}
