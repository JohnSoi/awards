<?php

namespace App\Http\Resources\Evaluation;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->project_id,
            'name_nominate' => $this->project ? $this->project->name_nominate : null,
            // 'name' => $this->project ? $this->project->name : null,
            'nomination' => $this->project && $this->project->nomination ? [
                'name' => $this->project->nomination->name
            ] : null,
            'eval' => $this->completed ? '+' : '-',
            'total' => $this->total,
            'comment' => $this->comment,
            'presentation' => $this->project ? $this->project->presentation : null,
            'url' => Route('evaluation.process') . '?project_id=' . $this->project_id
        ];
    }
}
