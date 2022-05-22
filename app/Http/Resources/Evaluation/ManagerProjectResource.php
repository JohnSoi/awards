<?php

namespace App\Http\Resources\Evaluation;

use Illuminate\Http\Resources\Json\JsonResource;

class ManagerProjectResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_nominate' => $this->name_nominate,
            // 'name' => $this->name,
            'nomination' => $this->nomination_name ? [
                'name' => $this->nomination_name
            ] : null,
            'presentation' => $this->presentation,
            'eval' => $this->evaluations_count,
            'total' => $this->total,
            'comment' => $this->comment,
            'is_top' => $this->is_top,
            'is_accept' => $this->is_accept,
            'url' => ''
        ];
    }
}
