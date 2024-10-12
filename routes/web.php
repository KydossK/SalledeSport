<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');   


Route::get('/cours', function () {
    return view('cours');
})->name('cours');   


Route::get('/tarifs', function () {
    return view('tarifs');
})->name('tarifs');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/mentions', function () {
    return view('mentionslegales');
})->name('mentions');
