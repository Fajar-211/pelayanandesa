<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WajibLapor;

class WajibLapor extends Model
{
    use HasFactory;
    protected $guarded = 'wajib_lapors'; // Nama tabel di database
    protected $fillable = [
        'nik_tamu',
        'nama_tamu',
        'foto_tamu',
    ];
}
