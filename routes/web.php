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
    return view ('Home');
});

Route::get('/about', function () {
    return view ('About', [
        "nama" => "naufal yanuardhi",
        "email" => "3103120160@student.smktelkom-pwt.sch.id",
        "gambar" => "naufalardhi.jpeg"
    ]);
});

Route::get('/gallery', function () {
    return view ('Gallery');

});