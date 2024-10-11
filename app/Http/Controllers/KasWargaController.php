<?php

namespace App\Http\Controllers;

use App\Models\KasWarga;
use Illuminate\Http\Request;
use App\Models\Notifikasi;
use App\Models\KasWargaImport;
use Spatie\Permission\Models\Role;

class KasWargaController extends Controller
{
    public function index(){
        $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();
        $kasWargas = KasWarga::all();
        $bulan = $_GET['bulan'] ?? null;

        // Kirim data ke view
        return view('user-kas-warga', compact('notifikasi', 'kasWargas', 'bulan'));
    }
   
}
