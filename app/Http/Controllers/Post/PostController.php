<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Channel;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    //Polymorphic Relationship
    //one-to-one
    public function create2()
    {
        $post = Post::find(1);
        $post->image()->create([
            'url'=> 'image/post-image.jpg'
        ]);
//        return view('');
    }

    //one-to-many
    public function create_comment()
    {
        $post = Post::find(1);
        //first comment of a post
//        $post->comments()->create([
//            'body'=> 'Nice Post buddy. Keep it up'
//        ]);
        //second comment of that post
        $post->comments()->create([
            'body'=> 'Nice Post buddy. Keep it up 2'
        ]);
//        return view('');
    }

    //many-to-many
    public function create_tags()
    {
        $post = Post::find(1);
        //first tag of a post
//        $post->tags()->create([
//            'name'=> 'laravel'
//        ]);
        // second tag of that post
        $post->tags()->create([
            'name'=> 'eloquent'
        ]);
//        return view('');
    }


}
