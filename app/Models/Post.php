<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];

    //one-To-one
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    //one-To-many
    //one video can have more than one comments
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    //many-To-many
    //one post can have more than one tags (vice versa)
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
