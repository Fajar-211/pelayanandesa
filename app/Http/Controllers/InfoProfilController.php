<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;
use Illuminate\Support\Facades\Auth;
use App\Models\DataWarga;
class InfoProfilController extends Controller
{
    public function index(){
        // Dapatkan email user yang sedang login
        $user = Auth::user();

        // Ambil data pengguna berdasarkan email
        $dataWarga = DataWarga::where('email', $user->email)->first();

        $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();

        // Kirim data ke view
        return view('user-info-profil', compact('notifikasi', 'dataWarga'));
    }
}
