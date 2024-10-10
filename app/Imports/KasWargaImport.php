<?php

namespace App\Imports;

use App\Models\KasWarga;
use Maatwebsite\Excel\Concerns\ToModel;

class KasWargaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new KasWarga([
            'bulan' => $row['bulan'],
            'tanggal' => \Carbon\Carbon::parse($row['tanggal_lahir'])->format('Y-m-d'),
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
