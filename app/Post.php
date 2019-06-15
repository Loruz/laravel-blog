<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author () {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category () {
        return $this->belongsTo(Category::class);
    }

    public function comments () {
        return $this->hasMany(Comment::class);
    }
}
