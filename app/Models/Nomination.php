<?php

namespace App\Models;

use App\Models\Traits\Translate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nomination extends Model
{
    use HasFactory, Translate;

    protected $fillable = [
        'name', 'description', 'title', 'about', 'name_en', 'description_en', 'title_en', 'about_en'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
