<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratPengantar;

class AdminController extends Controller
{
    public function view(){
        // Kirim data ke view
        return view('dashboard-admin', compact('SuratPengantar'));
    }
 
}
