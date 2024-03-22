<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestControler;

Route::get('/',[GuestControler::class,'index'] )->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
