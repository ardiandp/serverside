<?php

namespace App\Exports;

use App\Models\Banktemp;
use Maatwebsite\Excel\Concerns\FromCollection;

class BanktempExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Banktemp::all();
    }
}
