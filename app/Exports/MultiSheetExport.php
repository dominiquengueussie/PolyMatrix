<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class MultiSheetExport implements FromCollection, WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    
    }
    public function sheets(): array
    {
        $sheets = [];

        // Ajouter les données de la table 1 dans un classeur distinct
        $sheets[] = new EvaluationCommercialExport;

        // Ajouter les données de la table 2 dans un classeur distinct
        $sheets[] = new EvaluationSuperviseurExport;

        // Ajouter les données de la table 3 dans un classeur distinct
        $sheets[] = new ActiviteCommercialExport;

        return $sheets;
    }
}