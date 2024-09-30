<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;
class KasWargaController extends Controller
{
    public function index(){
        $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();

        // Kirim data ke view
        return view('user-kas-warga', compact('notifikasi'));
    }
}
