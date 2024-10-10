<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WajibLapor;
use App\Models\Notifikasi;
use Spatie\Permission\Models\Role;

class WajibLaporController extends Controller
{
    // Method untuk menyimpan laporan wajib lapor
    public function store(Request $request)
    {
        // Validasi data yang diterima
        // $request->validate([
        //     'nik_tamu' => 'required|string|max:16',
        //     'nama_tamu' => 'required|string|max:255',
        //     'foto_tamu' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);

        // Upload gambar dan simpan ke direktori 'foto_tamu'
        $path = $request->file('foto_tamu')->store('foto_tamu');
        if ($request->hasFile('foto_tamu')) {
            $image = $request->file('foto_tamu');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('public/foto_tamu', $imageName);
        }
    
        // Simpan nama file ke database
        $laporan = new WajibLapor();
        $laporan->nama_tamu = $request->input('nama_tamu');
        $laporan->nik_tamu = $request->input('nik_tamu');
        $laporan->foto_tamu = $imageName;  // Simpan nama file
        $laporan->save();
        // Simpan data ke database
        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Laporan berhasil ditambahkan.');
    }

    // Method untuk menampilkan halaman wajib lapor dengan notifikasi
    public function index()
    {
        // Ambil data notifikasi terakhir
        $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();

        // Ambil semua data wajib lapor untuk ditampilkan
        $wajibLapor = WajibLapor::all();

        // Kirim data ke view 'user-wajib-lapors'
        return view('user-wajib-lapors', compact('notifikasi', 'wajibLapor'));
    }
}
