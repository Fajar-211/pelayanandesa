<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Models\SuratPengantar;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

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

        // Ensure user is authenticated
        $userId = Auth::id();
        if (!$userId) {
            return redirect()->back()->withErrors('User not authenticated');
        }

        // Simpan data ke tabel surat_pengantar
        SuratPengantar::create([
            'user_id' => $userId,
            'nokk' => $validatedData['nokk'],
            'nik' => $validatedData['nik'],
            'nama' => $validatedData['nama'],
            'keperluan' => $validatedData['keperluan'],
        ]);

        // Redirect atau berikan response sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    public function index(){
        $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();

        // Kirim data ke view
        return view('user-surat-pengantar', compact('notifikasi'));
    }

    public function download(string $suratPengantarId) {
        // Cari data surat pengantar
        $suratPengantar = SuratPengantar::find($suratPengantarId);

        // Jika data tidak ditemukan
        if (!$suratPengantar) {
            return redirect()->back()->withErrors('Data surat pengantar tidak ditemukan');
        }

        // Generate PDF
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('download.surat-pengantar', [
            'surat' => $suratPengantar,
        ]);

        // Download PDF
        return $pdf->stream('surat-pengantar.pdf');
    }
}
