<?php

namespace App\Imports;

use App\Models\Banktemp;
use Maatwebsite\Excel\Concerns\ToModel;

class BanktempImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new Banktemp([
            'tanggal'     => $row['0'],
            'keterangan'    => $row['1'], 
            'cabang' => $row['2'],
            'jumlah' => $row['3'],
            'status' => $row['4'],
            'saldo'  => $row['5'],
        ]);
    }
}
