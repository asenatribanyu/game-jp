<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::get('/dict-hiragana', function () {
    return view('hiragana');
})->name('hiragana');

Route::get('/dict-katakana', function () {
    return view('katakana');
})->name('katakana');

