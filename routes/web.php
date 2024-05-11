<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/panduan', function () {
    return view('layouts.panduan');
})->name('panduan');



// Controller

// Update Data
Route::put('/updateData/{id}', [dashboardController::class, 'updateData'])->name('updateData');

// Delete Data
Route::delete('/deleteData', [dashboardController::class, 'deleteData'])->name('deleteData');

// Tambah Data
Route::post('/addData',[dashboardController::class, 'addData'])->name('addData');

// Ajax
Route::Get('/editData', [dashboardController::class, 'getDataEdit'])->name('getDataEdit');

// Dashboard
Route::Get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');

//Login
Route::get('/login', [userController::class, 'login'])->name('login');
Route::post('/login', [userController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [userController::class, 'register'])->name('auth.register');
Route::post('/register', [userController::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', [userController::class, 'logout'])->name('auth.logout');
