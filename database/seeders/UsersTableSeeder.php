<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'instansi_id' => 1,
            'role_id' => 1,
            'nip' => '3312220112940001',
            'jenis_kelamin' => 1,
            'phone' => '081234567890',
            'nama' => 'Didik Kurniawan',
            'username' => 'superadmin',
            'email' => 'didikkurniawannn@gmail.com',
            'password' => '$2y$10$5ro1KMsC7mHFV/42nAQ/6uge.EIZE5g4qjv6PKy5oD1JdGm5tqi0e', // asumsi sudah di-hash
            'remember_token' => 0,
            'created_at' => '2022-05-19 07:10:30',
            'tanggal_lahir' => '2000-01-01',
            'alamat' => 'Jl. Raya Transyogi, Jakarta',
            'updated_at' => '2023-09-07 22:59:21',
            'last_login_at' => '2023-09-07 22:59:21',
            'is_active' => 1
        ]);
    }
}
