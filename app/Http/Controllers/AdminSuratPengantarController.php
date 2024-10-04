<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminSuratPengantarController extends Controller
{
    
    public function view(){
        // Kirim data ke view
        return view('admin-surat-pengantar');
    }
}
