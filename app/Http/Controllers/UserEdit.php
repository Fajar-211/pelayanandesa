<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DataWarga;

class UserEdit extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'no_kk' => 'required|string|max:255',
            'tanggal_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'email' => 'required|email|unique:data_wargas,email,' . Auth::user()->id, // Validasi email unik
        ]);
        $dataWarga = DataWarga::where('email', Auth::user()->email)->first();

        $dataWarga->nama = $request->nama;
        $dataWarga->nik = $request->nik;
        $dataWarga->no_kk = $request->no_kk;
        $dataWarga->jenis_kelamin = $request->jenis_kelamin;
        $dataWarga->tanggal_lahir = $request->tanggal_lahir;
        $dataWarga->email = $request->email;

        $dataWarga->save();

        Auth::logout();

        return redirect('/login')->with('success', 'Profil dan email berhasil diperbarui. Silakan login kembali.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
