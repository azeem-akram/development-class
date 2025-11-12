<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/job-listings', [MainController::class, 'jobListings'])->name('job-listings');
Route::get('/job-details', [MainController::class, 'jobDetails'])->name('job-details');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');