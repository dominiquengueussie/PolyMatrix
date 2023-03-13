<?php

namespace App\Exports;

use App\Models\Activite;
use Maatwebsite\Excel\Concerns\FromCollection;

class ActiviteCommercialExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Activite::all();
    }
}