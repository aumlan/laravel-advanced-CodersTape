<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded=[];

    //one-To-many
    //one video can have more than one comment
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    //many-To-many
    //one video can have more than one tags (vice versa)
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
