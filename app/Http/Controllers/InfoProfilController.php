<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;
class InfoProfilController extends Controller
{
    public function index(){
        $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();

        // Kirim data ke view
        return view('user-info-profil', compact('notifikasi'));
    }
}
