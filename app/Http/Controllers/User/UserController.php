<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Polymorphic Relationship
    //user and post share same image
    public function create2()
    {
        $user = User::find(1);
        $user->image()->create([
            'url'=> 'image/profile-image.jpg'
        ]);
//        return view('post.create');
    }
}
