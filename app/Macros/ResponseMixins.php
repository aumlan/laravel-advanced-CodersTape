<?php

namespace App\Macros;

class ResponseMixins
{
    /**
     * Custom function in ResponseFactory Class/Trait
     * no need to give parameters in errorJson Function. Cause return of errorJson function is  another return. That will create a function in the ResponseFactory/Str Class.
     */

    public function errorJson()
    {
        return function ($message='Default Error Massage',$error_code='404'){
            return [
                'message'=> $message,
                'error_code'=>$error_code
            ];
        };
    }
}

