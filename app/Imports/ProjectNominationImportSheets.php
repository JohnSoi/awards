<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;

class ProjectNominationImportSheets implements WithMultipleSheets
{
    use WithConditionalSheets;

    public function conditionalSheets(): array
    {
        return [
            'Подача на сайтФИН' => new ProjectNominationImport(),
            // 'Проектный отдел' => new ProjectNominationImport(),
            // 'Владислав' => new ProjectNominationImport(),
            // 'На сайт остались 12_11' => new ProjectNominationImport(),
        ];
    }
}
