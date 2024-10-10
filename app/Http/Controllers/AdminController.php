<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratPengantar;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function view(){
        // Kirim data ke view
        $SuratPengantar = SuratPengantar::all();
        return view("admin-surat-pengantar", compact('SuratPengantar'));
    }
 
}
