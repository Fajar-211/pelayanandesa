<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;
use App\Models\DataWarga;
use Illuminate\Support\Facades\Auth;
class EditProfilController extends Controller
{
    public function index(){
        $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();

        // Kirim data ke view
        return view('user-edit-profil', compact('notifikasi'));
    }
    public function showProfile()
    {
        // Ambil data user yang login berdasarkan email
        $email = Auth::user()->email;
        $dataWarga = DataWarga::where('email', $email)->first();

        // Kirim dataWarga ke view profile.blade.php
        return view('user/edit-profil', compact('dataWarga'));
    }
    public function edit(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'no_kk' => 'required|string|max:255',
            'tanggal_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'email' => 'required|email|unique:data_wargas,email,' . Auth::user()->id, // Validasi email unik
        ]);
        $dataWarga = DataWarga::where('email', Auth::user()->email)->first();

        $dataWarga->nama = $request->nama;
        $dataWarga->nik = $request->nik;
        $dataWarga->no_kk = $request->no_kk;
        $dataWarga->jenis_kelamin = $request->jenis_kelamin;
        $dataWarga->tanggal_lahir = $request->tanggal_lahir;
        $dataWarga->email = $request->email;

        $dataWarga->save();

        Auth::logout();

        return redirect('/login')->with('success', 'Profil dan email berhasil diperbarui. Silakan login kembali.');
    }
}
