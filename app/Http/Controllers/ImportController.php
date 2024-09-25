<?php

namespace App\Http\Controllers;

use App\Imports\DataWargasImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
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

    public function dataWargaImport(Request $request) {
        $file = $this->SaveFile($request);
        $this->ImportData(new DataWargasImport, $file);
        return redirect()->back();
    }
}
