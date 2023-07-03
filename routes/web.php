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
    return view('home',[
        'questions'=> Question::where('id',1)->take(1)->get(),
    ]);
});

Route::get('/home', function () {
    return view('home',[
        'questions'=> Question::where('id',1)->get(),
    ]);
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

Route::get('/score',[QuestionController::class,'showScore']);

Route::get('/{question}',[QuestionController::class,'index']);

Route::post('/submit',[QuestionController::class,'submit']);
  

