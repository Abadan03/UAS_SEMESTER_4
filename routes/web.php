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

Route::middleware(['auth'])->group(function () {
<<<<<<< HEAD

});
=======

Auth::routes();

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/caritiket', [HomeController::class, 'index'])->name('home');
=======
    // route home ketika sudah login
    Route::get('/home', [HomeController::class, 'index'])->name('home');
>>>>>>> b2a51e825381b4d656b8f94974b9caaf6f8caa7c
    // Route::get('/home', function () {
    //     return view('home');
    // });


<<<<<<< HEAD
    });


>>>>>>> 2d94529958c6fd214a1afd5d3ce135ccd0a51d39
=======
});
>>>>>>> b2a51e825381b4d656b8f94974b9caaf6f8caa7c
