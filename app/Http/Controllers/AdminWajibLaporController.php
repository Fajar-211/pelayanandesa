<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WajibLapor;
use Spatie\Permission\Models\Role;

class AdminWajibLaporController extends Controller
{
    public function view(){
        // Kirim data ke view
        $WajibLapor = WajibLapor::all(); // mengambil data dari wajib lapor
        return view('admin-wajib-lapor', compact('WajibLapor'));
    }
    
}
