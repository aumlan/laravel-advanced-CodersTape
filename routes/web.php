<?php

use App\Http\Controllers\Channel\ChannelController;
use App\Http\Controllers\Payment\PayOrderController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Service Container (e.g. Payment Bank/Card)

Route::get('/pay-view', function () {
    return view('payment.pay');
});
Route::get('/pay', [PayOrderController::class,'store'])->name('pay');


// View Composer (e.g. )

Route::get('/channels', [ChannelController::class,'index'])->name('channel.index');
Route::get('/posts/create', [PostController::class,'create'])->name('post.create');
















