<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Pastikan DB di-import di sini


class DataWargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_wargas')->insert([
            [
                'nama' => 'Messi',
                'tanggal_lahir' => '1985-05-15',
                'no_kk' => '1234567890123456',
                'nik' => '3201012345678901',
                'email' => 'messi@example.com',
            ],
            [
                'nama' => 'Ronaldo',
                'tanggal_lahir' => '1990-10-20',
                'no_kk' => '2345678901234567',
                'nik' => '3201012345678902',
                'email' => 'ronaldo@example.com',
            ],
        ]);
    }
}
