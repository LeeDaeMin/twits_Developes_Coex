<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\feedController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\tweetController;
use App\Http\Controllers\userController;

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
//rutas para el controlador commentController
Route::Controller(commentController::class)->group(function(){
    Route::get('comment','index');
    Route::get('comment','show');
    Route::post('comment','update');
    Route::delete('comment','delete');
    Route::get('comment','create');
});
//rutas para el controlador feedController
Route::Controller(feedController::class)->group(function(){
    Route::get('feed','index');
    Route::get('feed','show');
    Route::post('feed','update');
    Route::delete('feed','delete');
    Route::get('feed','create');
});

//rutas para el controlador tweetController
Route::Controller(tweetController::class)->group(function(){
    Route::get('tweet','index');
    Route::get('tweet','show');
    Route::post('tweet','update');
    Route::delete('tweet','delete');
    Route::get('tweet','create');
});
//rutas para el controlador userController
Route::Controller(userController::class)->group(function(){
    Route::get('user','index');
    Route::get('user','show');
    Route::post('user','update');
    Route::delete('user','delete');
    Route::get('user','create');
});
 
