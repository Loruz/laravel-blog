<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     *  The path to the post.
     *
     * @return string
     */

    public function path()
    {
        return "/post/{$this->id}";
    }

    /**
     *  Author of the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     *  Category of the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     *  Comments of the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
