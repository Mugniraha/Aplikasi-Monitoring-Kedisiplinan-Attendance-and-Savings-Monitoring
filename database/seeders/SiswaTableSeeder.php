<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile_siswa')->insert([
            'nama_siswa' => 'Ramadhani',
            'nisn' => 2203054,
            'nis' => 1003054,
            'email' => 'ramadhani@gmail.com',
            'password' => Hash::make('2203054@pw'),
            'angkatan' => '2018',
        ]);
        DB::table('profile_siswa')->insert([
            'nama_siswa' => 'Sholihah',
            'nisn' => 2203055,
            'nis' => 1003055,
            'email' => 'sholihah@gmail.com',
            'password' => Hash::make('2203055@pw'),
            'angkatan' => '2019',
        ]);
    }
}
