<?php

namespace App\Exports;

use App\Http\Resources\Export\ExpertsExportResource;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExpertsExport implements FromCollection
{
    public $items = false;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function collection()
    {
        return ExpertsExportResource::collection($this->items);
    }
}
