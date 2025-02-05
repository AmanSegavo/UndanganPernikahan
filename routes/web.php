<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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

// Route untuk login, registrasi, dan logout (otomatis dibuat oleh make:auth)
Auth::routes();



// Route untuk mengelola tamu (CRUD) - Hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {
    Route::resource('guests', GuestController::class);
});
Route::middleware('auth')->group(function () {
    Route::resource('create', GuestController::class);
});
Route::middleware('auth')->group(function () {
    Route::resource('edit', GuestController::class);
});
Route::middleware('auth')->group(function () {
    Route::resource('show', GuestController::class);
});

// Route untuk menangani halaman undangan (bisa diakses tanpa login)
Route::get('/invitation/{uuid}', [GuestController::class, 'showInvitation'])->name('invitation.show');
Route::get('/opening/{uuid}', [GuestController::class, 'showOpening'])->name('opening.show');
Route::get('/quotes/{uuid}', [GuestController::class, 'showQuotes'])->name('quotes.show');
Route::get('/mempelai/{uuid}', [GuestController::class, 'showMempelai'])->name('mempelai.show');
Route::get('/akad/{uuid}', [GuestController::class, 'showAkad'])->name('akad.show');
Route::get('/gallery/{uuid}', [GuestController::class, 'showGallery'])->name('gallery.show');
Route::get('/gift/{uuid}', [GuestController::class, 'showGift'])->name('gift.show');
Route::get('/resepsi/{uuid}', [GuestController::class, 'showResepsi'])->name('resepsi.show');
Route::get('/rsvp/{uuid}', [GuestController::class, 'showRSVP'])->name('rsvp.show');
Route::get('/maps/{uuid}', [GuestController::class, 'showMaps'])->name('maps.show');
Route::get('/thanks/{uuid}', [GuestController::class, 'showThanks'])->name('thanks.show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/invitation/{uuid}', [GuestController::class, 'showInvitation'])->name('invitation.show');
