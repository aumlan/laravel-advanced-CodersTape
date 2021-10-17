<?php

namespace App\Macros;

class StrMixins
{
    /**
     * Custom function in ResponseFactory Class/Trait
     * no need to give parameters in errorJson Function. Cause return of errorJson function is another return. That will create a function in the ResponseFactory/Str Class.
     */

    public function partNumber()
    {
        return function ($part){
            return 'AB-'. substr($part,0,3).'-'. substr($part,3);
        };
    }

    //$prefix = could be userId or shop Name
    public function addPrefix()
    {
        return function ($string, $prefix='LLC-'){
            return $prefix . $string;
        };
    }
}
