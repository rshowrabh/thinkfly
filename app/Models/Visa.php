<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    protected $fillable = [
        'image',
        'icon',
        'category',
        'slug',
        'sub_text',
        'content',
    ];
}
