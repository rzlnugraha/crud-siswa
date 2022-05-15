<?php

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    /* Admin Group */
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
    });

    /* Siswa Group */
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
    });
});
