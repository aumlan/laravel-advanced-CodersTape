<?php

use App\Http\Controllers\Channel\ChannelController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Macros\MacrosExampleController;
use App\Http\Controllers\Payment\PayOrderController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Postcard\PostcardController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Video\VideoController;
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


// Polymorphic Relationship (e.g. ) Start//

//use post to create from blade
//one-to-one
Route::get('/create-post', [PostController::class,'create2'])->name('post.create2');
Route::get('/create-user', [UserController::class,'create2'])->name('user.create');

//one-to-many
Route::get('/create-comments-onPost', [PostController::class,'create_comment'])->name('post.comment-create');
    //first create a Video post
Route::get('/video/create', [VideoController::class,'create'])->name('video.create');
    //then implement the polymorphic relationship
Route::get('/create-comments-onVideo', [VideoController::class,'create_comment'])->name('video.comment-create');

//many-to-many
//Tag might be created before or it can automatically added during the post/video post creation
Route::get('/creat-tags-onPost', [PostController::class,'create_tags'])->name('post.comment-tags');
Route::get('/creat-tags-onVideo', [VideoController::class,'create_tags'])->name('video.comment-tags');


// Polymorphic Relationship (e.g. ) End//


// Facade Implementation Start//

//Normal version
Route::get('/postcards', [PostcardController::class,'index'])->name('postcard.index');

//Facade version
Route::get('/facades/postcards', [PostcardController::class,'index2'])->name('postcard.index2');

// Facade Implementation End//


// Macros Start//

Route::get('/macros-exmaple', [MacrosExampleController::class,'index'])->name('mixin.index');

// Macros End//


// Pipeline Start//

Route::get('/posts-filter', [PostController::class,'filter'])->name('post.filter');

// Pipeline End//


// Repositories Pattern Start//

Route::get('/customers', [CustomerController::class,'index'])->name('customer.index');
Route::get('/customers/{id}', [CustomerController::class,'showDetails'])->name('customer.showDetails');

// Repositories Pattern End//
