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
            'bulan' => $row[0], // Sesuaikan indeks dengan kolom di Excel
            'tanggal' => $row[1],
            'info_pemasukan' => $row[2],
            'saldo_masuk' => $row[3],
            'info_pengeluaran' => $row[4],
            'saldo_keluar' => $row[5],
            'saldo' => $row[6],
            'saldo_awal_tahun' => $row[7],
            'total_saldo' => $row[8],
        ]);
    }
}
