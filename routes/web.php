<?php

use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homes');

Route::post('/tiket', [App\Http\Controllers\HomeController::class, 'store']);

// Route::get('/tiket', [App\Http\Controllers\TiketController::class, 'index']);
Route::get('/tiket', [App\Http\Controllers\TiketController::class], 'index');

Route::view('/about', 'about');
// Route::get('/homes', [App\Http\Controllers\HomesController::class, 'index'])->name('homes');