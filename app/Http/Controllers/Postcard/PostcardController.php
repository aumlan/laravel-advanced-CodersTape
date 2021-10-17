<?php

namespace App\Http\Controllers\Postcard;

use App\Http\Controllers\Controller;
use App\Postcard\Postcard;
use App\Postcard\PostcardSendingService;
use Illuminate\Http\Request;

class PostcardController extends Controller
{
    //Normal version
    public function index()
    {
        $postcardService = new PostcardSendingService('usa', 4, 6);

        $postcardService->hello('Hello From Aumlan',email: 'test@test.com');

    }

    //Facade version
    public function index2()
    {
        // Postcard is a Facade
        //
        Postcard::hello('Hello From Facade/Aumlan','test@test.com');

    }
}
