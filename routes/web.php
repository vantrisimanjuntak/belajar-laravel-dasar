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
    return view('home');
});


Route::get('/about', function () {
    return view('about', [
        "name" => "Vantri Simanjuntak",
        "email" => "vantri_antonius@yahoo.co.id",
        "image" => "dv8y2020504712020-04-264593441G_wood-removebg-preview-1.png"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});