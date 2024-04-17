<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use App\Http\Controllers\GameController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('auth/login');
})->name('login');

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/game', [Controllers\GameController::class, 'index'])->name('game');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/question', [App\Http\Controllers\QuestionController::class, 'index'])->name('question');

Route::name('question.save')->post('/{question}', [QuestionController::class, 'save']);

Route::post('/logout', [Controllers\LogoutController::class, 'index'])->name('logout');
