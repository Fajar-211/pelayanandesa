<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminInfoProfileController extends Controller
{
    public function view(){
        // Kirim data ke view
        return view('admin-info-profile');
    }
}
