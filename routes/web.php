<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
// Illuminate\Support\Facades\Request::file();
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\dataPenumpangController;
use App\Http\Controllers\RiwayatPemesananController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ListTiketController;
use App\Http\Controllers\CariTiketPostController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\KonfirmasiPembayaran;
use App\Http\Controllers\konfirmasi_tiket;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\konfirmasi_admin;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\ControlPanel;
use App\Http\Controllers\TiketController;
// use App\Http\Controllers\IndexController;
// use App\Http\Controllers\IndexController;
// use App\Http\Controllers\IndexController;

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
// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('login', [UserLoginController::class, 'login'])->name('login');


Route::post('postlogin', [UserLoginController::class, 'postlogin'])->name('postlogin');

Route::get('controlpanel', [ControlPanel::class, 'index'])->name('index');
Route::post('confirm_order', [ControlPanel::class, 'confirm_order']);

Route::post('cancel_order', [ControlPanel::class, 'cancel_order']);

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

Route::middleware(['auth'])->group(function () {
    Route::get('/dataPenumpang', [dataPenumpangController::class, 'index']);
    Route::get('/riwayatpemesanan', [historyController::class, 'index']);
    Route::get('/review', [ReviewController::class, 'index']);
    Route::get('/listtiket', [ListTiketController::class, 'index']);
    Route::post('/getRequest', [CariTiketPostController::class, 'index']);
    // Route::get('/pembayaran/{id}', [CariTiketPostController::class, 'show']);
    Route::get('/caritiket', [CariTiketPostController::class, 'index']);
    Route::resource('/riwayat', historyController::class);
    Route::resource('/konfirmasi', KonfirmasiPembayaran::class);
    Route::resource('/pembayaran', PembayaranController::class);
    // Route::get('pembayaran/{id}', 'PembayaranController@show')->name('pembayaran.show');

    Route::get('/konfirmasi_tiket', [konfirmasi_tiket::class, 'index']);
    // Route::post('riwayat/{id}', [historyController::class, 'store']);
    // route home ketika sudah login
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/konfirmasi_admin', [konfirmasi_admin::class, 'index'])->name('home');
    Route::resource('/tiket', TiketController::class);

});



// Route::get('/file-path', function() {
//     $path = Storage::path('local-example.txt');
//     return $path;
// });

// Route::get('/upload-example', function() {
//     return view('upload-example');
// });

// Route::post('/upload-example', function(Request $request) {
//     $request = new Request();
//     $path = $request->file('avatar')->store('public');
//     return $path;
// })->name('upload-example');

// Route::get('/konfirmasi_tiket', function(Request $request) {
//     Storage::disk('local')->store($request);
//     return asset('storage/$request');
// });

// Route::get('/local-disk', function() {
//     Storage::disk('local')->put('local-example.txt', 'This is local example content');
//     return asset('storage/local-example.txt');
// });

// Route::get('lara-livewire-file-upload', function () {
//     return view('welcome');
// });
