<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_heading',
        'banner_url',
        'banner_image',
        'banner_image_offer',
        'banner_image_review',
    ];
}
