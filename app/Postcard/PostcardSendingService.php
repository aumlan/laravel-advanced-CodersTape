<?php

namespace App\Postcard;

use Illuminate\Support\Facades\Mail;

class PostcardSendingService
{
    private $country;
    private $width;
    private $height;

    public function __construct($country, $width, $height)
    {
        $this->country = $country;
        $this->width = $width;
        $this->height = $height;
    }

    public function hello($message, $email)
    {
        //Need Real SMTP service in .env
//        Mail::raw($message,function ($message) use ($email){
//            $message->to($email);
//        });

        // Mail out postcard through some service
        // $this->country
        // $this->width
        // $this->height

        //just to see the output
        dump('postcard was sent with message: '.$message);
    }
}
