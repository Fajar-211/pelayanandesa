<?php

namespace App\Imports;

use App\Models\DataWarga;
use App\Imports\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataWargasImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row['nama']);
        DataWarga::create([
            'nama' => $row['nama'],
            'tanggal_lahir' => \Carbon\Carbon::parse($row['tanggal_lahir'])->format('Y-m-d'),
            'nik' => $row['nik'],
            'no_kk' => $row['nomor_kk'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'email' => $row['email'],
        ]);

        $user = User::create([
            'name' => $row['nama'],
            'email' => $row['email'],
            'password' => Hash::make($row['nik']),
        ]);
        $user->assignRole('warga');


    }
}
