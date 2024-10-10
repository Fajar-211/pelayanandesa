<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\KasWargaImport;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Role;

class KasWargaImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new KasWargaImport, $request->file('file'));

        return redirect()->back()->with('success', 'Data berhasil diimport.');
    }
}
