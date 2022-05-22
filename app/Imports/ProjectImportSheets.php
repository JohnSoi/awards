<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;

class ProjectImportSheets implements WithMultipleSheets
{
    use WithConditionalSheets;

    public function conditionalSheets(): array
    {
        return [
            'Подача на сайтФИН' => new ProjectImport(),
            'Проектный отдел' => new ProjectImport(),
            'Владислав' => new ProjectImport(),
            'На сайт остались 12_11' => new ProjectImport(),
        ];
    }
}
