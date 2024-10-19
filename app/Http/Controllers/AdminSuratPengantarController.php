<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratPengantar;
use Spatie\Permission\Models\Role;


class AdminSuratPengantarController extends Controller
{
    
    public function view(){
        // Kirim data ke view
        $SuratPengantar = SuratPengantar::all(); // Ambil semua data surat pengantar
        return view('admin-surat-pengantar', compact('SuratPengantar'));
    }

    public function approve(string $id) {
        // Cari surat pengantar berdasarkan id
        $SuratPengantar = SuratPengantar::find($id);
        // Ubah status surat pengantar menjadi 'approved'
        $SuratPengantar->status = 'approved';
        // Simpan perubahan
        $SuratPengantar->save();
        // Redirect ke halaman surat pengantar
        return redirect()->route('admin.surat');
    }

    public function reject(string $id) {
        // Cari surat pengantar berdasarkan id
        $SuratPengantar = SuratPengantar::find($id);
        // Ubah status surat pengantar menjadi 'rejected'
        $SuratPengantar->status = 'rejected';
        // Simpan perubahan
        $SuratPengantar->save();
        // Redirect ke halaman surat pengantar
        return redirect()->route('admin.surat');
    }
}
