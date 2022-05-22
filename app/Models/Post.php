<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Tags\Url;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'text', 'published', 'created_at'
    ];

    public static $thumbs = [
        [1000], [620]
    ];

    public function toSitemapTag(): Url
    {
        return Url::create(Route('post.show', $this->id))->setPriority(1)->setLastModificationDate($this->updated_at);
    }
}
