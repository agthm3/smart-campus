<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
             'name' => 'Member',
            'email' => 'membersmart@gmail.com',
            'jabatan' => 'mahasiswa',
            'kendaraan' => 'mobil',
            'status' => 'pending',
            'auth' => 'member',
            'nim' => '0000',
            'created_at' => '2023-07-31 16:35:01',
            'updated_at' => '2023-07-31 16:35:01',
            // 'password' =>  Hash::make(env('MEMBER_PASSWORD'))
            'password' =>  Hash::make('Member98237')
        ]);
    }
}
