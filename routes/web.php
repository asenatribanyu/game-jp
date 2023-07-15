<?php

use App\Models\Question;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

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
    session()->put('score',0);
    return view('home/home', [
        "title" => "Home",
    ]);
});

Route::get('/home', function () {
    session()->put('score',0);
    return view('home/home', [
        "title" => "Home",
    ]);
});

Route::get('/start-quiz', function() {
    session()->put('score',0);
    return view('preload/preload', [
        'questions'=> Question::where('id',1)->get(),
    ]);
})->name('Start');

Route::get('/dictionary', function () {
    return view('dictionary/dictionary', [
        "title" => "Dictionary",
    ]);
});

Route::get('/dict-hiragana', function () {
    return view('dictionary/hiragana', [
        "title" => "Hiragana",
    ]);
})->name('hiragana');

Route::get('/dict-katakana', function () {
    return view('dictionary/katakana', [
        "title" => "Katakana",
    ]);
})->name('katakana');

Route::get('/score',[QuestionController::class,'showScore']);

Route::get('/{question}',[QuestionController::class,'index']);

Route::post('/submit',[QuestionController::class,'submit']);
  

