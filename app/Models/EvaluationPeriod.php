<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationPeriod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'evaluation_stop_at', 'evaluation_jury_stop_at'
    ];

    protected $casts = [
        'evaluation_stop_at' => 'datetime',
        'evaluation_jury_stop_at' => 'datetime'
    ];
}
