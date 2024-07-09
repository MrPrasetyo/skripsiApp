<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\pengajuanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/panduan', function () {
    return view('layouts.panduan');
})->name('panduan');

Route::get('/testing', function () {
    return view('Templates.testing');
})->name('testing');




// Controller

// Generate PDF
Route::get('/generatePdf', [pdfController::class, 'generatePdf'])->name('generatePdf');

// Arsip List
Route::get('/arsip', [adminController::class, 'arsipList'])->name('arsipList');

// Admin List
Route::get('/listadmin', [adminController::class, 'listAdmin'])->name('listAdmin');
Route::Get('/rejectadmin', [adminController::class,'rejectAdmin'])->name('rejectAdmin');
Route::Get('/AcceptAdmin', [adminController::class,'AcceptAdmin'])->name('AcceptAdmin');
Route::Get('/detailAdmin', [adminController::class, 'detailAdmin'])->name('detailAdmin');

// Submit Data
Route::match(['GET', 'POST'],'/submitRequest',[pengajuanController::class, 'submitDataPengajuan'])->name('submitDataPengajuan');

// Update Data
Route::put('/updateData', [dashboardController::class, 'updateData'])->name('updateData');

// Delete Data
Route::delete('/deleteData', [dashboardController::class, 'deleteData'])->name('deleteData');
Route::delete('/batalkanPengajuan', [pengajuanController::class, 'batalkanPengajuan'])->name('batalkanPengajuan');

// Tambah Data
Route::post('/addData',[dashboardController::class, 'addData'])->name('addData');

// Ajax
Route::Get('/editData', [dashboardController::class, 'getDataEdit'])->name('getDataEdit');
Route::Get('/OnlyData', [dashboardController::class, 'getDataOnly'])->name('getDataOnly');

// List Pengajuan
Route::Get('/pengajuan', [pengajuanController::class, 'listPengajuan'])->name('pengajuan');

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
