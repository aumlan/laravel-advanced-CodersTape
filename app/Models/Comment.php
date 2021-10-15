<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded=[];

    //one-To-many
    //one post/video post can have more than one comment
    public function commentable()
    {
        return $this->morphTo();
    }
}
