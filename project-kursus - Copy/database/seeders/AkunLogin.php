<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunLogin extends Seeder
{
    public function run(): void
    {
        // Untuk bisa mengakses dashboard, set jenisAkun ke 'admin'
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'email_verified_at' => now()
        ]);

        // Untuk sebagai user biasa, set jenisAkun ke 'use'
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'user@user.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
            'email_verified_at' => now()
        ]);
    }
}
