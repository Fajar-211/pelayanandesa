<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKasWargaController extends Controller
{
    public function view(){
        // Kirim data ke view
        return view('admin-kas-warga');
    }
}
