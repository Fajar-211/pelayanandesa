<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index() {

    // $this->middleware('role:warga');
    $user = Auth::user();
    $notifikasi = Notifikasi::orderBy('created_at', 'desc')->take(5)->get();
    return view("user", ['user' => $user, 'notifikasi' => $notifikasi]);
    }
}
