<?php

namespace App\Exports;

use App\Models\Bcacv;
use Maatwebsite\Excel\Concerns\FromCollection;

class BankcvExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bcacv::all();
    }
}
