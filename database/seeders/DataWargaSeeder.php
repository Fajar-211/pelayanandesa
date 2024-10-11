<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB; // Pastikan DB di-import di sini


class DataWargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [[
            'nama' => 'Messi',
            'tanggal_lahir' => '1985-05-15',
            'no_kk' => '1234567890123456',
            'nik' => '3201012345678901',
            'email' => 'messi@example.com',
            'jenis_kelamin' => "laki-laki"
        ],
        [
            'nama' => 'Ronaldo',
            'tanggal_lahir' => '1990-10-20',
            'no_kk' => '2345678901234567',
            'nik' => '3201012345678902',
            'email' => 'ronaldo@example.com',
            'jenis_kelamin' => "laki-laki"
        ]];


        DB::table('data_wargas')->insert($data);


        $user1 = User::create([
                'name' => 'Ronaldo',
                'email' => "ronaldo@example.com",
                'password' => Hash::make('3201012345678902')
            ]);

        $user2 = User::create( [
                'name' => 'Messi',
                'email' => 'messi@example.com',
                'password' => Hash::make('3201012345678901')
            ]);

        $user1->assignRole('warga');
        $user2->assignRole('warga');
    }
}
