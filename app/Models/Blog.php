<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Blog extends Model
{
    protected $fillable = [
        'image',
        'title',
        'slug',
        'sub_text',
        'body',
        'published_at',
    ];

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    protected static function booted() {
        static::creating(function($model) {
            $model->user_id = \Auth::user()->id;
        });
    }
}
