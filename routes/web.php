<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/beranda', function() {
    return view('home.app');
});

Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/profile', [BerandaController::class, 'profile'])->name('profile');
Route::get('/experience', [BerandaController::class, 'experience'])->name('experience');
Route::get('/karya', [BerandaController::class, 'karya'])->name('karya');
