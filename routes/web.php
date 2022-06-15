<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\mealGeneratorController;
use App\Http\Controllers\PortfolioDashboardController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\http\Controllers\WelcomeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', [WelcomeController::class, 'show']);

route::get('/profile', [ProfileController::class, 'show']);

route::get('/FAQ/create', [FAQController::class, 'create']);
route::post('/FAQ', [FAQController::class, 'store']);
route::get('/FAQ', [FAQController::class, 'index']);
route::get('/FAQ/{question}', [FAQController::class, 'show']);
route::get('/FAQ/{question}/edit', [FAQController::class, 'edit']);
route::put('/FAQ/{question}', [FAQController::class, 'update']);
route::delete('/FAQ/{question}', [FAQController::class, 'destroy']);

route::get('/articles/create', [ArticlesController::class, 'create']);
route::post('/articles', [ArticlesController::class, 'store']);
route::get('/articles', [ArticlesController::class, 'index']);
route::get('/articles/{article}', [ArticlesController::class, 'show']);
route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
route::put('/articles/{article}', [ArticlesController::class, 'update']);
route::delete('/articles/{article}', [ArticlesController::class, 'destroy']);

route::get('/articles/{article}', [ArticlesController::class, 'show']);

route::get('/articles', [ArticlesController::class, 'show']);
route::get('/articles', [ArticlesController::class, 'index']);

route::get('/portfoliodashboard', [PortfolioDashboardController::class, 'show']);

route::get('/mealGenerator', [mealGeneratorController::class, 'show']);

route::get('/posts/{slug}', [PostsController::class, 'show']);
