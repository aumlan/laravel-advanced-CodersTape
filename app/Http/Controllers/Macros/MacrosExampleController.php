<?php

namespace App\Http\Controllers\Macros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class MacrosExampleController extends Controller
{

    /**
     * Use these custom functions in Controller
     * Macro is a ALTERNATIVE of Helpers functions
     * Not need to add anything in composer.json like helper
     * you should not modify composer.json [remember]
     */
    public function index()
    {
//        dd(Str::partNumber('12345678'));
//        dd(Str::addPrefix('12345678'));
        dd( Response::errorJson('A Huge Error Occured','501'));
    }
}

/**
 * List of the Classes/Traits that support Macros.
 *
 * https://coderstape.com/blog/3-macroable-laravel-classes-full-list
 */
