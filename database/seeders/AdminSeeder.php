<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'adminsmart@gmail.com',
            'jabatan' => 'admin',
            'kendaraan' => 'mobil',
            'status' => 'confirm',
            'auth' => 'admin',
            'nim' => '0000',
            'created_at' => '2023-07-31 16:35:01',
            'updated_at' => '2023-07-31 16:35:01',
            'password' =>  Hash::make('Admin73971')
        ]);
    }
}
