<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome'); 
});


Route::get('/register', [UserController::class, 'index'])->name('user.index');

Route::get('/roles', [RoleController::class, 'index'])->name('module.index');