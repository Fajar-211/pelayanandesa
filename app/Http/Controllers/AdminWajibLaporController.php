<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WajibLapor;

class AdminWajibLaporController extends Controller
{
    public function view(){
        // Kirim data ke view
        $WajibLapor = WajibLapor::all(); // mengambil data dari wajib lapor
        return view('admin-wajib-lapor', compact('WajibLapor'));
    }
    public function upload(Request $request, $id)
{
    $request->validate([
        'foto_tamu' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file
    ]);

    $lapor = WajibLapor::find($id);
    
    // Simpan file gambar
    if ($request->hasFile('foto_tamu')) {
        $file = $request->file('foto_tamu');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');

        // Simpan path file ke database
        $lapor->foto_tamu = '/storage/' . $filePath;
        $lapor->save();
    }

    return redirect()->back()->with('success', 'Foto berhasil diupload');
}
}
