<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create()
    {
        $video_create = Video::create([
            'title'=>'Video 1',
            'url'=>'videos/random-video-1.mp4',
        ]);
    }

    //one-to-many
    public function create_comment()
    {
        $video = Video::find(2);
        //first comment of a video
        $video->comments()->create([
            'body'=> 'Nice Video buddy. Keep it up'
        ]);

        //second comment of that video
//        $video->comments()->create([
//            'body'=> 'Nice Video buddy. Keep it up 2'
//        ]);
//        return view('');
    }

    //many-to-many
    public function create_tags()
    {
        //find('id')-> dynamic from request
        $video = Video::find(2);
        //first tag of a video post
//        $video->tags()->create([
//            'name'=> 'php'
//        ]);

        //second [ EXISTING ] tag of that video post
        //attach('tag_id) from 'tag' table
        $video->tags()->attach(2);
//        return view('');
    }

}
