<?php

use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 // Ubah nama rute menjadi login-proses

Route::get('/reg', [App\Http\Controllers\RegisConn::class, 'index'])->name('reg');
Route::post('/reg-proses', [App\Http\Controllers\RegisConn::class, 'register_process'])->name('reg-proses');
// Route::get('/login', [App\Http\Controllers\LoginConn::class, 'index'])->name('login');
// Route::post('/log-proses', [App\Http\Controllers\LoginConn::class, 'login_process'])->name('log-proses');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
