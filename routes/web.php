<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;

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


Auth::routes();
// route yang pertama kali muncul
// akses / bakal nampilin view login yang ada didalam folder auth
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/review', function () {
    return view('review');
});


Auth::routes();

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/caritiket', [HomeController::class, 'index'])->name('home');

    // route home ketika sudah login
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Route::get('/home', function () {
        //     return view('home');
        // });
});
