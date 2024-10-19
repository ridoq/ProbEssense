<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;

Route::get('/',[LandingController::class, 'index'])->name('landing');
Route::get('/tentang',function(){
    return view('about.index');
})->name('about');
Route::get('/umkm',[UmkmController::class, 'index'])->name('umkm');
Route::get('/budaya',[CultureController::class, 'index'])->name('budaya');
Route::get('/budaya/detail/{id}',[CultureController::class, 'show'])->name('budayaDetail');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
