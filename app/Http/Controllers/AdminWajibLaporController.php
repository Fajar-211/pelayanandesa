<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminWajibLaporController extends Controller
{
    public function view(){
        // Kirim data ke view
        return view('admin-wajib-lapor');
    }
}
