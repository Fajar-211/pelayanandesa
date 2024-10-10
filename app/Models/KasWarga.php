<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasWarga extends Model
{
    use HasFactory;
    protected $fillable = [
        'bulan',
        'tanggal',
        'info_pemasukan',
        'saldo_masuk',
        'info_pengeluaran',
        'saldo_keluar',
        'saldo',
        'saldo_awal_tahun',
        'total_saldo',
    ];
}
