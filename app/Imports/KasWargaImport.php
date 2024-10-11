<?php

namespace App\Imports;

use App\Models\KasWarga;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KasWargaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row['nama']);
        KasWarga::create([
            'bulan' => $row['bulan'],
            'tanggal' => \Carbon\Carbon::parse($row['tanggal'])->format('Y-m-d'),
            'info_pemasukan' => $row['info_pemasukan'],
            'saldo_masuk' => $row['saldo_masuk'],
            'info_pengeluaran' => $row['info_pengeluaran'],
            'saldo_keluar' => $row['saldo_keluar'],
            'saldo' => $row['saldo'],
            'saldo_awal_tahun' => $row['saldo_awal_tahun'],
            'total_saldo' => $row['total_saldo'],
        ]);

        
    }
}
