<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'title', 'about'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
