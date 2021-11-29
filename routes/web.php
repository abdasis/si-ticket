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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
    /*route untuk data ticket*/
    Route::group(['prefix' => 'ticket'], function(){
        Route::get('/', \App\Http\Livewire\Ticket\Semua::class)->name('ticket.semua');
        Route::get('tambah', \App\Http\Livewire\Ticket\Tambah::class)->name('ticket.tambah');
        Route::get('sunting/{id}', \App\Http\Livewire\Ticket\Sunting::class)->name('ticket.sunting');
    });

    /*Route untuk data pengguna*/
    Route::group(['prefix' => 'pengguna'], function (){
        Route::get('/', \App\Http\Livewire\Pengguna\Semua::class)->name('pengguna.semua');
        Route::get('tambah', \App\Http\Livewire\Pengguna\Tambah::class)->name('pengguna.tambah');
        Route::get('sunting/{id}', \App\Http\Livewire\Pengguna\Sunting::class)->name('pengguna.sunting');
        Route::get('profile', \App\Http\Livewire\Pengguna\Detail::class)->name('pengguna.detail');

    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
