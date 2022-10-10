<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\feedController;
use App\Http\Controllers\userController;
use App\Http\Controllers\tweetController;
use App\Http\Controllers\commentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#Tweet Routes

Route::get('/tweets', [tweetController::class, 'index']) -> name('tweets.index');
Route::post('/tweets', [tweetController::class, 'create']) -> name('tweets.create');
Route::get('/tweets/{id}', [tweetController::class, 'show']) -> name('tweets.show');
Route::put('/tweets/{id}', [tweetController::class, 'update']) -> name('tweets.update');
Route::delete('/tweets/{id}', [tweetController::class, 'delete']) -> name('tweets.delete');

#Comments Routes

Route::get('/comments', [commentController::class, 'index']) -> name('comments.index');
Route::post('/comments', [commentController::class, 'create']) -> name('comments.create');
Route::get('/comments/{id}', [commentController::class, 'show']) -> name('comments.show');
Route::put('/comments/{id}', [commentController::class, 'update']) -> name('comments.update');
Route::delete('/comments/{id}', [commentController::class, 'delete']) -> name('comments.delete');

#Feed Routes

Route::get('/feeds', [feedController::class, 'index']) -> name('feeds.index');
Route::post('/feeds', [feedController::class, 'create']) -> name('feeds.create');
Route::get('/feeds/{id}', [feedController::class, 'show']) -> name('feeds.show');
Route::put('/feeds/{id}', [feedController::class, 'update']) -> name('feeds.update');
Route::delete('/feeds/{id}', [feedController::class, 'delete']) -> name('feeds.delete');

#User Routes

Route::get('/users', [userController::class, 'index']) -> name('users.index');
Route::post('/users', [userController::class, 'create']);
Route::get('/users/{id}', [userController::class, 'show']) -> name('users.show');
Route::put('/users/{id}', [userController::class, 'update']);
Route::delete('/users/{id}', [userController::class, 'delete']) -> name('users.delete');




