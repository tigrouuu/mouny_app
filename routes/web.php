<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return phpinfo();
});
Route::view('welcome', 'welcome');*/

Route::view('/', 'home')->name('home');

Route::get('contact', static function () {
    return view('contact');
});
Route::get('blog-grid-sidebar', static function () {
    return view('blog-grid-sidebar');
});
Route::get('blog-single', static function () {
    return view('blog-single');
});
Route::get('blog-single-sidebar', static function () {
    return view('blog-single-sidebar');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
