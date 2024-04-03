<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use App\Http\Controllers\GameController;
use App\Http\Controllers\Auth\RegisterController;

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
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/game', [Controllers\GameController::class, 'index'])->name('game');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::resource('teste', Controllers\TesteController::class);



// Route::get('/teste', [Controllers\TesteController::class, 'index'])->name('teste.index');
// Route::get('/teste/{teste}', [Controllers\TesteController::class, 'show'])->name('teste.show');
Route::get('/teste/{teste}/edit', [Controllers\TesteController::class, 'edit'])->name('teste.edit');
Route::put('/teste/{teste}/update', [Controllers\TesteController::class, 'update'])->name('teste.update');
