<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/meet', function(){
        return view('home.index');
    });
});

Route::get('/migrate', function() { \Illuminate\Support\Facades\Artisan::call('migrate'); });

