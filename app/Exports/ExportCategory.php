<?php

namespace App\Exports;

use App\Models\Categor;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportCategory implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Categor::all();
    }
}
