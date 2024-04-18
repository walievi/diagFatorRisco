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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
})->name('login');

Route::get('/', function () { return view('auth/login');});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/game', [Controllers\GameController::class, 'index'])->name('game');

    Route::get('/question/{question}', [App\Http\Controllers\QuestionController::class, 'index'])->name('question');

    Route::name('question.save')->post('/question/{question}/save', [QuestionController::class, 'save']);

    Route::get('/questionnaire', [App\Http\Controllers\QuestionnaireController::class, 'index'])->name('questionnaire');
});




Route::post('/logout', [Controllers\LogoutController::class, 'index'])->name('logout');
