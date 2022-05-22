<?php

namespace App\Http\Resources\Export;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpertsExportResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password_view' => $this->password_view,
        ];
    }
}
