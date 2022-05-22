<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image ? $this->image : '/img/V2/page/news/default.svg',
            'image_620' => ImageUrl($this->image, 620, false, '/img/V2/page/news/default.svg'),
            'image_1000' => ImageUrl($this->image, 1000, false, '/img/V2/page/news/default.svg'),
            'url' => Route('post.show', $this->id),
            'date' => $this->created_at->format('d.m.y')
        ];
    }
}
