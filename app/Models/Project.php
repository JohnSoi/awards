<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'is_import',
        'is_organization',
        'inn',
        'kpp',
        'director',

        'name',
        'deposit',
        'geography',
        'phone_nominee',
        'email_nominee',
        'unique',
        'phone_nominate',
        'email_nominate',
        'name_nominate',
        'why_worthy',
        'industry_id',
        'nomination_id',

        'social_url',
        'is_form2',
        'is_top',

        'shortlist_texts',
        'shortlist_video'
    ];

    protected $casts = [
        'shortlist_texts' => 'array'
    ];

    public static $thumbs = [
        [266]
    ];

    public static $shortlist_image_thumbs = [
        [800]
    ];

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function nomination()
    {
        return $this->belongsTo(Nomination::class);
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function isShortlistImageAndVideo()
    {
        return $this->shortlist_image && $this->shortlist_video;
    }
}
