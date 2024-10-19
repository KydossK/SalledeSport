<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\MentionsLegalesController;
use App\Http\Controllers\TarifsController;

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/cours', [CoursController::class, 'index'])->name('cours.index');

Route::get('/tarifs', [TarifsController::class, 'index'])->name('tarifs.index');

Route::get('/mentionslegales', [MentionsLegalesController::class, 'index'])->name('mentionslegales.index');
