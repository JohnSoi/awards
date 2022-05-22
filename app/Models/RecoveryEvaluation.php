<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecoveryEvaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'is_expert', 'project_id', 'period_id', 'completed', 'comment', 'total', 'criterions', 'created_at', 'updated_at'
    ];

    protected $casts = [
        'criterions' => 'json'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
