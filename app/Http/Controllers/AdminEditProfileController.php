<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEditProfileController extends Controller
{
    public function view(){
        // Kirim data ke view
        return view('admin-edit-profile');
    }
}
