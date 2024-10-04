<?php

namespace App\Imports;

use App\Models\KasWargas;
use Maatwebsite\Excel\Concerns\ToModel;

class KasWargasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new KasWargas([
            //
        ]);
    }
}
