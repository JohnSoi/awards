<?php

namespace App\Exports;

use App\Http\Resources\Export\ProjectExportResource;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProjectExport implements FromCollection
{
    public $items = false;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function collection()
    {
        return ProjectExportResource::collection($this->items);
    }
}
