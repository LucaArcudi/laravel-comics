<?php

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


Route::get('/home', function () {
    $title = "My homepage";
    return view('home', compact("title"), ['array' => ['a', 'b', 'c']]);
});

Route::get('/profile', function () {
    $title = "My profile";
    return view('profile', compact("title"));
})->name('profile');

Route::get('/posts', function () {
    return view('posts.index');
})->name('posts');

Route::get('/', function () {
    return view('welcome');
});
