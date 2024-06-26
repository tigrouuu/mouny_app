<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return phpinfo();
});*/

Route::view('/', 'home')->name('home');
Route::view('about', 'about');
Route::view('welcome', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
