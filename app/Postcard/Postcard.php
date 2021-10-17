<?php

namespace App\Postcard;

class Postcard
{
    public static function resolveFacade($name)
    {
        // app() = entire application
        // $name = match the exact same string [singltone(abstract='Postcard')] in the Facade version in AppServiceProvider
        return app()[$name];
    }


    //Magic Method
    // __callstatic() grabs any static method calls that get passed into this class. (that doesn't exist)
    // $method= 'the function name that doesn't exist'
    // $arguments= 'parameters (if more than one then array) passing from that function'
    public static function __callStatic($method, $arguments)
    {
        return (self::resolveFacade('Postcard'))
            ->$method(...$arguments);
    }

}
