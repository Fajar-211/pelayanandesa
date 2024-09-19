<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratPengantar;

class SuratPengantarController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data form
        $validatedData = $request->validate([
            'nokk' => 'required|max:255',
            'nik' => 'required|max:255',
            'nama' => 'required|max:255',
            'keperluan' => 'required|max:255',
        ]);

        // Simpan data ke tabel surat_pengantar
        SuratPengantar::create($validatedData);

        // Redirect atau berikan response sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}