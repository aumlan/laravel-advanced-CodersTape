<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Notifications\InvoicePaid;
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


    /**
     * User Notification [mail, database]
     * according to the 'notification_preference' in 'users' table
     */
    public function invoicePaidNotification($userID)
    {
        $user = User::find($userID);
        $user->notify(new InvoicePaid());
    }
}
