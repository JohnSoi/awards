<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutAwards extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'isVideo', 'value_en'];
}
