<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurCountry extends Model
{
    protected $fillable = [
        'image',
        'flag',
        'category',
        'sub_text',
        'content',
    ];
}
