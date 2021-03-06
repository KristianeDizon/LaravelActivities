<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\HomeController;
use Illuminate\Support\Facades\PostController; 

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
    return view('home');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post');

Route::get('/home', function () {
    return view('home');
});

Route::get('/post', function () {
    return view('post');
});


