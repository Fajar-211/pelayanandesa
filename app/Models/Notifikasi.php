<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $table = 'notif'; // Nama tabel di database

    protected $fillable = ['deskripsi']; // Kolom yang bisa diisi
}
