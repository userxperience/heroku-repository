<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;


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
//
//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

Route::get('/', [WelcomeController::class, 'show']);

route::get ('/profile', [ProfileController::class, 'show']);

route::get('/FAQ', [FAQController::class, 'show']);

route::get('/feed', [FeedController::class, 'show']);

route::get('/dashboard', [DashboardController::class, 'show']);

route::get('/program', [ProgramController::class, 'show']);
