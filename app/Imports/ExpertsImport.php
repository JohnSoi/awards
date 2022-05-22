<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;

class ExpertsImport implements WithMultipleSheets
{
    use WithConditionalSheets;

    public function conditionalSheets(): array
    {
        return [
            'Подтвержденные эксперты' => new ExpertsSheetImport()
        ];
    }
}
