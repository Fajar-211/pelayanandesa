<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role;


class AdminDataWargaController extends Controller
{
    use HasFactory;
    public function view(){
        // Kirim data ke view
        return view('admin-data-warga');
    }

}
