<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use App\Http\Controllers\GameController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\Auth\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will=
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/password/reset', function () {
    return view('auth/passwords/reset');
});

Route::get('/game', [Controllers\GameController::class, 'index'])->name('game');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/question', [App\Http\Controllers\QuestionController::class, 'index'])->name('question');

// Route::name('/question')->get('/question/{question}', [QuestionController::class, 'index']);
Route::get('/question/{question}', [App\Http\Controllers\QuestionController::class, 'index'])->name('question');

Route::name('question.save')->post('/question/{question}/save', [QuestionController::class, 'save']);

Route::get('/questionnaire', [App\Http\Controllers\QuestionnaireController::class, 'index'])->name('questionnaire');





