<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     *  User that comment belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     *   Post that comment belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     *  Comment replies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function replies ()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
