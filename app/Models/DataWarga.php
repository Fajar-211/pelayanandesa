<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataWarga extends Model
{
    use HasFactory;
    // protected $table = 'surat_pengantar'; 
    protected $fillable = [
        'no',
        'nama',
        'tanggal_lahir',
        'no_kk',
        'nik',
        'jenis_kelamin',
        'email',
    ];
}
