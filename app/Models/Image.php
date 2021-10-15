<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded=[];

    //one-to-one
    //one image table for user or post
    public function imageable()
    {
        return $this->morphTo();
    }
}
