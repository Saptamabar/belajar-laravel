<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'welcome'])->name('homepage');

Route::get('/dashboard', [PageController::class,'dashboard']);

Route::get('/profile/{name}', [PageController::class,'profile'])->name('profile');

Route::get("/login",[PageController::class,'login'])->name('login');

Route::post("/login",[PageController::class,'LoginPost'])->name('login.store');




