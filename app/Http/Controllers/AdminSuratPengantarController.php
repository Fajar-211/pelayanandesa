<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratPengantar;


class AdminSuratPengantarController extends Controller
{
    
    public function view(){
        // Kirim data ke view
        $SuratPengantar = SuratPengantar::all(); // Ambil semua data surat pengantar
        return view('admin-surat-pengantar', compact('SuratPengantar'));
    }
}
