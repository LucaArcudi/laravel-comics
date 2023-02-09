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


Route::get('/', function () {
    $title = "My homepage";
    return view('home', compact("title"));
});

Route::get('/comic', function () {
    $title = "My comic";
    return view('comic', compact("title"));
})->name('comic');
