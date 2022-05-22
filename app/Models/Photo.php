<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'sort', 'date', 'is_home'
    ];

    public static $thumbs = [
        [422]
    ];
}
