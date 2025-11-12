<?php
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/upload', [MainController::class, 'upload'])->name('upload');
Route::post('/upload', [MainController::class, 'uploadFile'])->name('uploadFile');