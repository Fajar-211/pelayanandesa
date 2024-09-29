<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WajibLapor;
use App\Models\Notifikasi;

class WajibLaporController extends Controller
{
    public function store(Request $request)
    {
       $path = $request -> file('foto_tamu')->store('foto_tamu');
        // Simpan data ke database
        WajibLapor::create([
            'nik_tamu' => $request->input('nik_tamu'),
            'nama_tamu' => $request->input('nama_tamu'),
            'foto_tamu' => $path // Simpan path gambar ke database
        ]);

        // Redirect atau kembalikan respon
        return redirect()->back();
    }
    public function index(){
        $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();

        // Kirim data ke view
        return view('user-wajib-lapors', compact('notifikasi'));
    }
}
