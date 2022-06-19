<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KategoriController;


Auth::routes();
Route::get('/home',[ HomeController::class, 'index'])->name('home');
Route::get('/viewPost/{slug}',[ HomeController::class, 'viewPost'])->name('home');
Route::resource('post', PostController::class);
Route::resource('kategori', KategoriController::class);
Route::get('/admin',[ AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('/',[ HomeController::class, 'index'])->name('welcome');
