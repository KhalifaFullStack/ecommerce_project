<?php

namespace App\Exports;

use App\Models\ContactUs;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportContactUs implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ContactUs::all();
    }
}
