<?php

namespace App\Http\Controllers;

use App\Models\KasWarga;
use Illuminate\Http\Request;
use App\Imports\KasWargaImport;
use Maatwebsite\Excel\Facades\Excel;

class KasWargaImportController extends Controller
{
    private function SaveFile(Request $request)
    {
        $file = $request->file('file');
		$nama_file = rand().$file->getClientOriginalName();
		$file->move('imported', $nama_file);

        return public_path("/imported/".$nama_file);
    }
    private function ImportData($importClass, $file)
    {
        Excel::import($importClass, $file);
        unlink($file);
        return;
    }
    public function kasWargaImport(Request $request) {
        $file = $this->SaveFile($request);
        $this->ImportData(new KasWargaImport, $file);
        return redirect()->back();
    }
}
