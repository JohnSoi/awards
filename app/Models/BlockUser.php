<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'block_id', 'user_id', 'sort'
    ];

    public static $blocks = [
        [
            'id' => 1,
            'name' => 'Эксперты',
        ],
        [
            'id' => 2,
            'name' => 'Жюри',
        ]
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
