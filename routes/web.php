<?php

use App\Models\Question;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\QuestionController;

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
    return view('home/home', [
        "title" => "Home",
        'questions'=> Question::where('id',1)->take(1)->get(),
    ]);
})->name('home');

Route::get('/home', function () {
    return view('home/home', [
        "title" => "Home",
        'questions'=> Question::where('id',1)->get(),
    ]);
})->name('home');

Route::get('/dictionary', function () {
    return view('dictionary/dictionary', [
        "title" => "Dictionary",
        'questions'=> Question::where('id',1)->get(),
    ]);
});

Route::get('/dict-hiragana', function () {
    return view('dictionary/hiragana', [
        "title" => "Hiragana",
        'questions'=> Question::where('id',1)->get(),
    ]);
})->name('hiragana');

Route::get('/dict-katakana', function () {
    return view('dictionary/katakana', [
        "title" => "Katakana",
        'questions'=> Question::where('id',1)->get(),
    ]);
})->name('katakana');

Route::get('/score',[QuestionController::class,'showScore']);

Route::get('/{question}',[QuestionController::class,'index']);

Route::post('/submit',[QuestionController::class,'submit']);
  

