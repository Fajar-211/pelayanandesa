<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;
use App\Models\DataWarga;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class EditProfilController extends Controller
{
    public function index(){
        $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();
        $email = Auth::user()->email;
        $dataWarga = DataWarga::where('email', $email)->first();

        // Kirim data ke view
        return view('user-edit-profil', [
            'notifikasi' => $notifikasi,
            'dataWarga' => $dataWarga
        ]);
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

        $user = Auth::user();
        $dataWarga = DataWarga::where('email', $user->email)->first();

        if ($request->hasFile('foto_profil')) {
            // Simpan file baru
            $path = $request->file('foto_profil')->store('foto_profil', 'public');
            $dataWarga->foto_profil = $path;
        }

        if($dataWarga->email == $request->email) {
            $request->validate([
                'nama' => 'required|string|max:255',
                'nik' => 'required|string|max:16',
                'no_kk' => 'required|string|max:255',
                'tanggal_lahir' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|max:255',
            ]);
        } else {
            $request->validate([
                'nama' => 'required|string|max:255',
                'nik' => 'required|string|max:16',
                'no_kk' => 'required|string|max:255',
                'tanggal_lahir' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|max:255',
                'email' => 'required|email|unique:data_wargas,email,' . Auth::user()->id, // Validasi email unik
            ]);
        }

        $dataWarga->nama = $request->nama;
        $dataWarga->nik = $request->nik;
        $dataWarga->no_kk = $request->no_kk;
        $dataWarga->jenis_kelamin = $request->jenis_kelamin;
        $dataWarga->tanggal_lahir = $request->tanggal_lahir;
        $dataWarga->email = $request->email;

        $dataWarga->save();

        $user->email = $request->email;
        $user->save();


        return redirect()->route('profile.info');
    }
}
