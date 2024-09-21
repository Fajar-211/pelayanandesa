<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;

class NotifikasiController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data form
        $validatedData = $request->validate([
            'deskripsi' => 'required|max:255',
        ]);

        // Simpan data ke tabel notifikasi
        Notifikasi::create($validatedData);

        // Redirect atau berikan response sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    public function index()
    {
        // Mengambil 5 data terbaru dari tabel notif
        $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();

        // Kirim data ke view
        return view('user', compact('notifikasi'));
    }
}

