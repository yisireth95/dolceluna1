<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/#menu', function () {
    return view('welcome');
})->name('menu');

Route::get('/#about', function () {
    return view('welcome');
})->name('about');

Route::get('/#gallery', function () {
    return view('welcome');
})->name('gallery');

Route::get('/#contact', function () {
    return view('welcome');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



